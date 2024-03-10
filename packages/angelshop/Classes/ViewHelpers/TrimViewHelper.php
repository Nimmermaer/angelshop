<?php

namespace MB\Angelshop\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class TrimViewHelper extends AbstractViewHelper
{
    /**
     * Arguments initialization
     */
    public function initializeArguments(): void
    {
        $this->registerArgument('value', 'string', 'The value to output');
    }

    public function render(): string
    {
        if ($this->arguments['value'] === null) {
            $this->arguments['value'] = $this->renderChildren();
        }
        // remove new line - does not matter in html anyway
        $this->arguments['value'] = str_replace(chr(10), '', (string) $this->arguments['value']);
        $this->arguments['value'] = str_replace(' ', '', $this->arguments['value']);
        $this->arguments['value'] = str_replace('/', '', $this->arguments['value']);
        // remove multiple whitespaces
        $this->arguments['value'] = preg_replace('#\s+#', '', $this->arguments['value']);
        return trim($this->arguments['value']);
    }
}
