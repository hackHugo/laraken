<?php

namespace Kendo\UI;

class WindowModal extends \Kendo\SerializableObject {
//>> Properties

    /**
    * Specifies whether the document should stop scrolling when modal dialog is opened. Closing it should restore the initial document overflow. This setting will modify the overflow rule of the document, and thus cannot be used together with the containment setting.Note that it's not supported to have multiple windows with different preventScroll setting.
    * @param boolean $value
    * @return \Kendo\UI\WindowModal
    */
    public function preventScroll($value) {
        return $this->setProperty('preventScroll', $value);
    }

//<< Properties
}

?>
