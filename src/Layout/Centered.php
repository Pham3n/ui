<?php

namespace atk4\ui\Layout;

/**
 * Implements a fixed-width single-column bevel in the middle of the page, centered
 * horizontally and vertically. Icon / Title will apear above the bevel.
 *
 * Bevel will use some padding and will contain your Content.
 * This layout is handy for a simple and single-purpose applications.
 */
class Centered extends Generic
{
    public $defaultTemplate = 'layout/centered.html';

    public function init()
    {
        parent::init();

        // set application's title

        $this->template['title'] = $this->app->title;
    }

    public function render()
    {
        $this->renderAll();
        $this->template->appendHTML('HEAD', $this->getJS());
        return $layout->template->render();
    }
}
