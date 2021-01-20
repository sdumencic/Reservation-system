<x-app-layout>
    <div class="container my-5">
        @livewire('teams.update-team-name-form', ['team' => $team])

        @livewire('teams.team-member-manager', ['team' => $team])

        @if (Gate::check('delete', $team) && !$team->personal_team)
            <x-jet-section-border />

            @livewire('teams.delete-team-form', ['team' => $team])
        @endif
    </div>
</x-app-layout>
