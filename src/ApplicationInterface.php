<?php

namespace Riftfox\Wechat\Application;

interface ApplicationInterface
{
    const TYPE_OFFICE = 1;
    const TYPE_SERVICE = 2;
    const TYPE_MINI_PROGRAM = 3;

    const ENCRYPTION_MODE_PLAIN_TEXT = 0;
    const ENCRYPTION_MODE_SAFE = 1;
    const ENCRYPTION_MODE_COMPATIBILITY = 2;

    public function getAppId();
    public function getAppSecret();
    public function getToken();
    public function getType();
    public function getEncodingAesKey();
    public function getEncryptionMode();

    public function typeLabels(): array;
    public function getTypeLabel(ApplicationInterface $app): string;
    public function encryptionModeLabels(): array;
    public function getEncryptionModeLabel(ApplicationInterface $app): string;
}