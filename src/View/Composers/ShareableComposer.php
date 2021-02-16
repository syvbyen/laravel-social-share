<?php

namespace syvbyen\SocialShare\View\Composers;

use Illuminate\View\View;
use Illuminate\Support\Str;


class ShareableComposer
{
    protected $shareables = [];

    public function compose(View $view)
    {
        $view->with('shareables', $this->setShareables());
    }

    /**
     * Goes through all the channels in config('share.channels')
     * and finds the corresponding class in the namespace
     * Syvbyen\Share\Shareables (src/Shareables)
     *
     * return @array
     */
    protected function setShareables()
    {
        foreach (config('social-share.shareables') as $shareable => $value) {
            $class = 'syvbyen\\SocialShare\\Shareables\\' . Str::title($shareable);
            $data = (new $class)->getData();

            if ($data) {
                $this->shareables[] = $data;
            }
        }

        return $this->shareables;
    }
}
