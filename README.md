# wechat-application

本组件用于微信公众号、服务号、小程序等应用的接口开发，提供统一的应用实体接口 `ApplicationInterface`，以及便捷的类型和加密模式标签获取工具。

## 主要接口与特性

### ApplicationInterface

`ApplicationInterface` 规定了应用实体应实现的基本方法，包括：
- 获取 AppId、AppSecret、Token、EncodingAesKey
- 获取应用类型（公众号、服务号、小程序）
- 获取消息加密模式（明文、安全、兼容）
- 获取类型/加密模式的标签及下拉选项

```php
interface ApplicationInterface
{
    const TYPE_OFFICE = 1; // 公众号
    const TYPE_SERVICE = 2; // 服务号
    const TYPE_MINI_PROGRAM = 3; // 小程序

    const ENCRYPTION_MODE_PLAIN_TEXT = 0; // 明文
    const ENCRYPTION_MODE_SAFE = 1; // 安全模式
    const ENCRYPTION_MODE_COMPATIBILITY = 2; // 兼容模式

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
```

### ApplicationTypeLabelTrait

提供类型标签相关方法，便于获取类型下拉选项和当前类型标签：

```php
trait ApplicationTypeLabelTrait
{
    public function typeLabels(): array
    {
        return [
            ApplicationInterface::TYPE_OFFICE => '公众号',
            ApplicationInterface::TYPE_SERVICE => '服务号',
            ApplicationInterface::TYPE_MINI_PROGRAM => '小程序',
        ];
    }

    public function getTypeLabel(ApplicationInterface $application): string
    {
        return $this->typeLabels()[$application->getType()];
    }
}
```

### ApplicationEncryptionModeLabelTrait

提供加密模式标签相关方法，便于获取加密模式下拉选项和当前加密模式标签：

```php
trait ApplicationEncryptionModeLabelTrait
{
    public function encryptionModeLabels(): array
    {
        return [
            ApplicationInterface::ENCRYPTION_MODE_PLAIN_TEXT => '明文',
            ApplicationInterface::ENCRYPTION_MODE_SAFE => '安全模式',
            ApplicationInterface::ENCRYPTION_MODE_COMPATIBILITY => '兼容模式',
        ];
    }

    public function getEncryptionModeLabel(ApplicationInterface $application): string
    {
        return $this->encryptionModeLabels()[$application->getEncryptionMode()];
    }
}
```

## 使用示例

```php
class MyWechatApp implements ApplicationInterface
{
    use ApplicationTypeLabelTrait, ApplicationEncryptionModeLabelTrait;
    // ... 实现接口方法 ...
}

$app = new MyWechatApp();
$typeOptions = $app->typeLabels(); // 获取类型下拉选项
$typeLabel = $app->getTypeLabel($app); // 获取当前类型标签
$encryptionOptions = $app->encryptionModeLabels(); // 获取加密模式下拉选项
$encryptionLabel = $app->getEncryptionModeLabel($app); // 获取当前加密模式标签
```

## 贡献与反馈

如有建议或问题，欢迎提交 issue 或联系作者。

---

作者：Riftfox  
邮箱：riftfox@riftfox.com
