<div>
    <div>
        <section id="hero"  x-data="{ card: 1, autoSlide() { setInterval(() => { this.card = this.card < 3 ? this.card + 1 : 1 }, 7000) } }" x-init="autoSlide" id="hero"
            class="relative z-20 flex items-center justify-center h-screen overflow-hidden">
            @include('livewire.home._hero')
        </section>

        <section id="profile-school" class="py-16 ">
            @include('livewire.home._profil_school')
        </section>

        <section id="information" class="py-16 bg-gray-100">
            @include('livewire.home._main_information')
        </section>

        <section id="galleries"  class="py-16">
            @include('livewire.home._gallery')
        </section>

        <section id="contacts" class="py-16 bg-gray-100">
            @include('livewire.home._contact')
        </section>
    </div>
</div>
