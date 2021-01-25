<div class="card tasks-card">
    <div class="card-body justify-content-center">
        <h2>Completed Tasks</h2>

        <p class="card-separator"></p>
        
        <ul class="task-list">
            @foreach($tasks as $key => $task)
                <div x-data="{ open: false }">
                    <li @click="open = true" class="task"><span class="task-number">{{++$key}}</span> - {{ $task->description }}</li>

                    <ul x-show.transition.in.duration.150ms="open" @click.away="open = false" x-cloak>
                        <li wire:click="deleteTask({{$task->id}})" @click="open = false" class="task-buttons btn-delete"><i class="fas fa-trash-alt"></i></li>
                    </ul>
                </div>
            @endforeach
        </ul>
    </div>
</div>

<style>
    [x-cloak] { display: none; }
</style>
