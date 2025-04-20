

<x-card :title="$title" shadow separator class="border shadow">

    <div class="grid grid-cols-2 mb-4">
    <div>
        <x-button label="List" link="{{ $url }}" class="btn-ghost btn-outline" />

        @if ($id)
        <x-button label="Create" link="{{ $url . '/create' }}" class="btn-ghost btn-outline" />
        @endif

        @if ($id && $isReadonly)
        <x-button label="Edit" link="{{ $url . '/edit/' . $id }}" class="btn-ghost btn-outline" />
        @endif

    </div>
    <div class="text-right">
        @if ($id && !$isReadonly)
        <x-button label="Delete" wire:click="delete" wire:confirm="Do you want to delete this data?"
            class="btn-ghost btn-outline text-red-500" />
        @endif
    </div>
    </div>

{{ auth()->user()->name }}
    <form wire:submit.prevent="update">

        @foreach ($groupedPermissions as $group => $permissionsInGroup)
            <div class="mb-3">
                <h4>{{ ucfirst($group) }}</h4>
                @foreach ($permissionsInGroup as $permission)
                    <div>
                        <label>
                            <input type="checkbox" wire:model="selectedPermissions" value="{{ $permission->id }}">
                            {{ ucfirst($permission->name) }}
                        </label>
                    </div>
                @endforeach
            </div>
        @endforeach

        <button type="submit" class="btn btn-primary mt-3">Update Permissions</button>

    </form>


<!-- Loading Indicator -->
<div id="loadingIndicator" style="display: none; text-align: center; margin-top: 20px;">
    <p>Loading...</p>
    <div class="loader"></div> <!-- You can add a spinner here -->
</div>

<script>
function toggleCheckboxes(source) {
    const checkboxes = document.querySelectorAll('input[type="checkbox"][wire\\:model="masterForm.permissions"]');
    checkboxes.forEach((checkbox) => {
        checkbox.checked = source.checked;
        checkbox.dispatchEvent(new Event('change')); // Trigger change event to update Livewire
    });

    if (!source.checked) {
      @this.refreshData();
    }

}
</script>


</x-card>
