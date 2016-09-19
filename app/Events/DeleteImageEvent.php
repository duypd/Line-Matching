<?php
/**
 * Copyright (c) 2016. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 * Morbi non lorem porttitor neque feugiat blandit. Ut vitae ipsum eget quam lacinia accumsan.
 * Etiam sed turpis ac ipsum condimentum fringilla. Maecenas magna.
 * Proin dapibus sapien vel ante. Aliquam erat volutpat. Pellentesque sagittis ligula eget metus.
 * Vestibulum commodo. Ut rhoncus gravida arcu.
 */

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class DeleteImageEvent extends Event
{
    use SerializesModels;
    /**
     * @var
     */
    private $image;

    /**
     * Create a new event instance.
     *
     * @param $image
     */
    public function __construct($image)
    {
        $this->image = $image;
    }

    /**
     * Fire Delete file
     */
    public function delete()
    {
        if(!empty($this->image['origin']) && \File::exists($this->image['origin'])) {

            \File::delete($this->image['origin']);
        }

        if(!empty($this->image['thumb']) && \File::exists($this->image['thumb'])) {
            \File::delete($this->image['thumb']);
        }
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
