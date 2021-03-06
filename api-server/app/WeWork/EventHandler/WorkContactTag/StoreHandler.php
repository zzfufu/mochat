<?php

declare(strict_types=1);
/**
 * This file is part of MoChat.
 * @link     https://mo.chat
 * @document https://mochat.wiki
 * @contact  group@mo.chat
 * @license  https://github.com/mochat-cloud/mochat/blob/master/LICENSE
 */
namespace App\WeWork\EventHandler\WorkContactTag;

use App\QueueService\WorkContactTag\StoreCallBackApply;
use MoChat\Framework\Annotation\WeChatEventHandler;
use MoChat\Framework\WeWork\EventHandler\AbstractEventHandler;

/**
 * 添加企业客户标签 - 事件回调.
 * @WeChatEventHandler(eventPath="event/change_external_tag/create")
 * Class ContactStoreHandler
 */
class StoreHandler extends AbstractEventHandler
{
    /**
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @return null|mixed|void
     */
    public function process()
    {
        ## 队列
        (new StoreCallBackApply())->handle($this->message);
    }
}
