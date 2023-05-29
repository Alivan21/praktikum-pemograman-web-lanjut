<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Input extends Component
{
  public string $name;
  public string $type;
  public string $placeholder;
  public string $label;
  public string $value = "";
  /**
   * Create a new component instance.
   *
   * @return void
   */
  public function __construct($name, $type, $placeholder, $label, $value)
  {
    $this->name = $name;
    $this->type = $type;
    $this->placeholder = $placeholder;
    $this->label = $label;
    $this->value = $value;
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|\Closure|string
   */
  public function render()
  {
    return view('components.forms.input');
  }
}
