<?php

namespace Kendo\UI;

class SwitchButtonMessages extends \Kendo\SerializableObject {
//>> Properties

    /**
    * The label when Kendo UI Switch is checked.
    * @param string $value
    * @return \Kendo\UI\SwitchButtonMessages
    */
    public function checked($value) {
        return $this->setProperty('checked', $value);
    }

    /**
    * The label when Kendo UI Switch is unchecked.
    * @param string $value
    * @return \Kendo\UI\SwitchButtonMessages
    */
    public function unchecked($value) {
        return $this->setProperty('unchecked', $value);
    }

//<< Properties
}

?>
