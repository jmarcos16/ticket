<?php

namespace App\Livewire\Ticket;

use App\Models\Ticket;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    public function render()
    {
        return view('livewire.ticket.index', [
            'tickets' => Ticket::paginate(10),
        ]);
    }
}
