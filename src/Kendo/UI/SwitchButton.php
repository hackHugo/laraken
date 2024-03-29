<?php

namespace Kendo\UI;

class SwitchButton extends \Kendo\UI\Widget {
    public function name() {
        return 'Switch';
    }

    protected function createElement() {
        $element = new \Kendo\Html\Element('input');
        return $element;
    }
//>> Properties

    /**
    * The checked state of the widget.
    * @param boolean $value
    * @return \Kendo\UI\SwitchButton
    */
    public function checked($value) {
        return $this->setProperty('checked', $value);
    }

    /**
    * If set to false the widget will be disabled and will not allow the user to change its checked state.
    * @param boolean $value
    * @return \Kendo\UI\SwitchButton
    */
    public function enabled($value) {
        return $this->setProperty('enabled', $value);
    }

    /**
    * If set to true the Kendo UI Switch will render into its read-only state.
    * @param boolean $value
    * @return \Kendo\UI\SwitchButton
    */
    public function readonly($value) {
        return $this->setProperty('readonly', $value);
    }

    /**
    * Defines the text of the checked and unchecked labels that are shown within the Switch. All labels could be localized.
    * @param \Kendo\UI\SwitchButtonMessages|array $value
    * @return \Kendo\UI\SwitchButton
    */
    public function messages($value) {
        return $this->setProperty('messages', $value);
    }

    /**
    * The width of the Kendo UI Switch.
    * @param float|string $value
    * @return \Kendo\UI\SwitchButton
    */
    public function width($value) {
        return $this->setProperty('width', $value);
    }

    /**
    * Sets the change event of the SwitchButton.
    * Fires when the checked state of the Kendo UI Switch changes by user interaction.
    * @param string|\Kendo\JavaScriptFunction $value Can be a JavaScript function definition or name.
    * @return \Kendo\UI\SwitchButton
    */
    public function change($value) {
        if (is_string($value)) {
            $value = new \Kendo\JavaScriptFunction($value);
        }

        return $this->setProperty('change', $value);
    }


//<< Properties
}

?>
