<?php

namespace Riftfox\Wechat\Application;

trait ApplicationEncryptionModeLabelTrait
{
    public function encryptionModeLabels():array
    {
        return [
            ApplicationInterface::ENCRYPTION_MODE_PLAIN_TEXT => '',
            ApplicationInterface::ENCRYPTION_MODE_SAFE => '',
            ApplicationInterface::ENCRYPTION_MODE_COMPATIBILITY => '',
        ];
    }

    public function getEncryptionModeLabel(ApplicationInterface $application):string
    {
        return $this->encryptionModeLabels()[$application->getEncryptionMode()];
    }
}