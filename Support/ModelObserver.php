<?php namespace AwatBayazidi\Contracts\Support;

use Illuminate\Contracts\Events\Dispatcher;

/**
 * Class     ModelObserver
 *
 * @package  AwatBayazidi\AtbAuth\Bases
 * @author   AwatBayazidi <AwatBayazidi.maroc@gmail.com>
 */
abstract class ModelObserver
{
    /* ------------------------------------------------------------------------------------------------
     |  Properties
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * @var Dispatcher
     */
    protected $event;

    /* ------------------------------------------------------------------------------------------------
     |  Constructor
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * UserObserver constructor.
     *
     * @param  Dispatcher  $event
     */
    public function __construct(Dispatcher $event)
    {
        $this->event = $event;
    }
}
