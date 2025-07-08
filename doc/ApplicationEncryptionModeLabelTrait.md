# ApplicationEncryptionModeLabelTrait 文档

## 简介

`ApplicationEncryptionModeLabelTrait` 提供了加密模式标签相关的方法，便于获取加密模式下拉选项和当前加密模式的标签显示，常用于前端表单渲染和加密模式展示。

## 方法说明

| 方法 | 返回值 | 说明 |
| ---- | ------ | ---- |
| `encryptionModeLabels()` | array | 获取所有加密模式的标签映射（如 0=>明文，1=>安全模式，2=>兼容模式）|
| `getEncryptionModeLabel(ApplicationInterface $application)` | string | 获取指定应用加密模式的标签 |

## 典型用法

```php
class MyWechatApp implements ApplicationInterface
{
    use ApplicationEncryptionModeLabelTrait;
    // ... 实现接口方法 ...
}

$app = new MyWechatApp();
$encryptionOptions = $app->encryptionModeLabels(); // [0=>明文, 1=>安全模式, 2=>兼容模式]
$encryptionLabel = $app->getEncryptionModeLabel($app); // 当前加密模式标签
```

---

如需进一步了解，请参考源码或联系作者。 