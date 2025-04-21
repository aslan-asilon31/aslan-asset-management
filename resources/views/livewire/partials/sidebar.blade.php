<div>
    <x-slot:sidebar drawer="main-drawer" collapsible class="bg-base-100 lg:bg-inherit">

        <x-app-brand class="p-5 pt-3" />

        <x-menu activate-by-route>

            <x-menu-sub title="Setting" icon="o-cog-6-tooth">
            <x-menu-item title="Profile" link="/profil"  :class="request()->is('profil') ? 'active' : ''" icon="o-user-circle"  />

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

            <x-menu-item title="Logout" wire.confirm="apakah kamu yakin ingin logout ?" icon="o-arrow-left-start-on-rectangle" link="{{ route('logout') }}"
                onclick="event.preventDefault();
                        if (confirm('Apakah kamu yakin ingin logout?')) {
                            document.getElementById('logout-form').submit();
                        }">
                    {{ __('Logout') }}
            </x-menu-item>

            </x-menu-sub>
            <x-menu-separator />

            <x-menu-item title="Dashboard" icon="o-presentation-chart-bar" link="/dasbor"  :class="request()->is('dasbor') ? 'active' : ''" />

            <x-menu-item title="Dashboard User" icon="o-home" link="/dasbor-user"  :class="request()->is('dasbor-user') ? 'active' : ''" />


            <x-menu-separator title="Management" icon="o-sparkles" />


            <x-menu-item title="Asset" icon="o-squares-2x2" link="/asset" :class="request()->is('asesmen-evaluator') ? 'active' : ''" />

            <x-menu-item title="Asset Category" icon="o-squares-2x2" link="/asset-category" :class="request()->is('daftar-penilaian-asesmen-detail') || request()->is('daftar-penilaian-asesmen-crud-ubah') ? 'active' : ''" />

            <x-menu-item title="Asset Type" icon="o-squares-2x2" link="/asset-type" :class="request()->is('hasil-asesmen') ? 'active' : ''" />

            <x-menu-separator title="Role & Permission" icon="o-sparkles" />

            <x-menu-item title="Role" icon="o-squares-2x2" link="/role" :class="request()->is('role') ? 'active' : ''" />

        </x-menu>
    </x-slot:sidebar>
</div>
