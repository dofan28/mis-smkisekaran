<?php

namespace App\Livewire\Admin\Event;

use App\Models\Events;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;

#[Title('Mengelola Kegiatan | SMK ISLAM SEKARAN - Jalan Raya Sekaran, 01, Sekaran Lamongan')]
#[Layout('components.layouts.dashboard')]
class Index extends Component
{
    use WithPagination;

    public $search = '';

    public function updatedSearch()
    {
        $this->resetPage();
    }
    
    public function delete(Events $event)
    {
        if ($event->image !== 'admin/img/event.png') {
            Storage::delete($event->image);
        }

        $event->delete();

        session()->flash('success', 'Kegiatan berhasil dihapus.');
        $this->redirect('/admin/events', navigate: true);
    }

    public function render()
    {
        $events = Events::search($this->search)->paginate(5);

        return view('livewire.admin.event.index', [
            'events' => $events, 
            'header' => 'Mengelola Kegiatan'
        ]);
    }
}
