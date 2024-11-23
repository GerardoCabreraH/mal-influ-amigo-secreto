<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Collection;

class Game extends Component
{
    public $players;

    public function mount(): void 
    {
        $this->players = Collection::times(5, fn () => [
            'name' => ''
        ]);
    }

    public function render()
    {
        return view('livewire.game');
    }

    public function addPlayer(): void 
    {
        $this->players->push([
            'name' => ''
        ]);
    }

    public function removePlayer($key): void
    {
        $this->players->forget($key);
    }
}
