<?php

namespace Riftfox\Wechat\Application;

trait ApplicationTypeLabelTrait
{
    public function typeLabels():array
    {
        return [
            ApplicationInterface::TYPE_OFFICE => '公众号',
            ApplicationInterface::TYPE_SERVICE => '服务号',
            ApplicationInterface::TYPE_MINI_PROGRAM => '小程序',
        ];
    }

    public function getTypeLabel(ApplicationInterface $application):string
    {
        return $this->typeLabels()[$application->getType()];
    }
}