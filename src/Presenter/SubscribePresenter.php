<?php

namespace App\WwwModule\Presenter;

final class SubscribePresenter extends \Nepttune\Presenter\BasePresenter
{
    /**
     * @inject
     * @var \Nepttune\Model\PushNotificationModel
     */
    public $pushNotificationModel;

    /** @var string */
    protected $publicKey;

    public function __construct(string $publicKey)
    {
        parent::__construct();

        $this->publicKey = $publicKey;
    }

    public function actionDefault()
    {
        $this->template->publicKey = $this->publicKey;
    }

    public function handleSubscribe()
    {
        $this->pushNotificationModel->saveSubscription();
    }
}