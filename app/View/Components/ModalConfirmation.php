<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ModalConfirmation extends Component
{
    /**
     * Create a new component instance.
     */

    public $action;
    public $icon;
    public $title;
    public $elementHeader;
    public $description;

    public function __construct(string $action = null, $identify = null, public $data = null)
    {

        if ($action == 'delete') {
            $this->icon = '<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-red-600" viewBox="0 -960 960 960" width="24px">
    <path class="fill-red-600" style="fill: red !important;" d="M480-280q17 0 28.5-11.5T520-320q0-17-11.5-28.5T480-360q-17 0-28.5 11.5T440-320q0 17 11.5 28.5T480-280Zm0-160q17 0 28.5-11.5T520-480v-160q0-17-11.5-28.5T480-680q-17 0-28.5 11.5T440-640v160q0 17 11.5 28.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/>
</svg>';
            $this->title = 'Hapus Data';
            $this->elementHeader = '<h3 class="text-lg font-semibold leading-6 text-red-600 font-merriweather" id="modal-headline">Hapus Data</h3>';
            $this->description = "Anda yakin menghapus data  <span class='font-semibold break-words '>" . ($identify ? "$identify" : "") . " </span>?";
            $this->action = 'delete';
            $this->data = $data;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View | Closure | string
    {
        return function () {
            return view('components.modal-confirmation', [
                'icon' => $this->icon,
                'title' => $this->title,
                'elementHeader' => $this->elementHeader,
                'description' => $this->description,
                'action' => $this->action,
                'data' => $this->data,
            ]);
        };
    }
}
