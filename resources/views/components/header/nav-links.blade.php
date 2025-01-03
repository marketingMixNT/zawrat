<nav class="">
    <ul class="flex justify-center items-center gap-10">

        <x-header.nav-item href="" activeRoute="home">O nas</x-header.nav-item>
      


        <x-header.nav-item-dropdown href="" activeRoute="room.index" title="Apartamenty">
            <x-header.dropdown>
               
                <x-header.dropdown-item href="" activeRoute="room.first">Apartament 1</x-header.dropdown-item>
                <x-header.dropdown-item href="" activeRoute="room.second">Apartament 2</x-header.dropdown-item>
            

            </x-header.dropdown>
        </x-header.nav-item-dropdown>



        <x-header.nav-item href="" activeRoute='location'>Lokalizacja</x-header.nav-item>
        <x-header.nav-item href="" activeRoute='gallery'>Galeria</x-header.nav-item>
        <x-header.nav-item href="" activeRoute='contact'>Kontakt</x-header.nav-item>
        
    </ul>
</nav>