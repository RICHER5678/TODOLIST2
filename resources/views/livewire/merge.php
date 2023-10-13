<div class="card task-card">
    <div class="card-body">
        <h1>Merge Tasks</h1>

        @error('description') <span class="error">- {{ $message }}</span> @enderror

        <form class="create-task justify-content-center" wire:submit.prevent="submit">
            <input wire:model="description" class="form-text" type="text" placeholder="Merge tasks...">

            <button class="btn btn-todo">Merge</button>
        </form>
    </div>
</div>
