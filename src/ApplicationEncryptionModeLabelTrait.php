<?php

namespace Riftfox\Wechat\Application;

trait ApplicationEncryptionModeLabelTrait
{
    public function encryptionModeLabels():array
    {
        return [
            ApplicationInterface::ENCRYPTION_MODE_PLAIN_TEXT => '明文模式',
            ApplicationInterface::ENCRYPTION_MODE_COMPATIBILITY => '兼容模式',
            ApplicationInterface::ENCRYPTION_MODE_SAFE => '安全模式（推荐）',
        ];
    }

    public function getEncryptionModeLabel(ApplicationInterface $application):string
    {
        return $this->encryptionModeLabels()[$application->getEncryptionMode()];
    }
}