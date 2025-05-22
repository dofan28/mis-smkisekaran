<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Login | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
class Login extends Component
{
    public $email;
    public $password;
    public $remember = false;

    public function rules()
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ];
    }

    public function message()
    {
        return [
            'email.required' => 'Alamat email harus diisi',
            'email.email' => 'Format alamat email salah',
            'password.required' => 'Kata sandi harus diisi',
        ];
    }

    // Menambahkan metode untuk menghasilkan kunci rate limiting
    protected function throttleKey()
    {
        return Str::lower($this->email) . '|' . request()->ip();
    }

    // Menambahkan metode untuk menghitung jumlah percobaan login
    protected function hasTooManyLoginAttempts()
    {
        return RateLimiter::tooManyAttempts($this->throttleKey(), 5);
    }

    // Menambahkan metode untuk menambah jumlah percobaan login
    protected function incrementLoginAttempts()
    {
        RateLimiter::hit($this->throttleKey(), 60); // Batas percobaan direset setiap 60 detik
    }

    // Menambahkan metode untuk mengunci akun setelah percobaan login yang gagal
    protected function lockoutResponse()
    {
        $seconds = RateLimiter::availableIn($this->throttleKey());

        session()->flash('error', 'Terlalu banyak percobaan login. Silakan coba lagi dalam ' . $seconds . ' detik.');
        $this->redirect('/login', navigate: true);
    }

    public function authenticate()
    {
        // Cek apakah pengguna telah melakukan terlalu banyak percobaan login
        if ($this->hasTooManyLoginAttempts()) {
            return $this->lockoutResponse();
        }

        // Validasi data input
        $validatedData = $this->validate();

        // Percobaan autentikasi pengguna
        if (Auth::attempt($validatedData, $this->remember)) {
            Session::regenerate();

            // Bersihkan hitungan percobaan login setelah berhasil
            RateLimiter::clear($this->throttleKey());

            return $this->redirectIntended('/admin/dashboard', navigate: true);
        }

        // Tambah hitungan percobaan login setelah gagal
        $this->incrementLoginAttempts();

        session()->flash('error', 'Email atau kata sandi salah.');
        return $this->redirect('/login', navigate: true);
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
