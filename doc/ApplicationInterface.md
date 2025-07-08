# ApplicationInterface 接口文档

## 简介

`ApplicationInterface` 是用于微信公众号、服务号、小程序等应用实体的统一接口，定义了应用的基本属性、类型、加密模式及相关标签获取方法。

## 常量说明

- `TYPE_OFFICE = 1`：公众号
- `TYPE_SERVICE = 2`：服务号
- `TYPE_MINI_PROGRAM = 3`：小程序
- `ENCRYPTION_MODE_PLAIN_TEXT = 0`：明文模式
- `ENCRYPTION_MODE_SAFE = 1`：安全模式
- `ENCRYPTION_MODE_COMPATIBILITY = 2`：兼容模式

## 方法说明

| 方法 | 返回值 | 说明 |
| ---- | ------ | ---- |
| `getAppId()` | string | 获取应用的 AppId |
| `getAppSecret()` | string | 获取应用的 AppSecret |
| `getToken()` | string | 获取 Token |
| `getType()` | int | 获取应用类型（见常量） |
| `getEncodingAesKey()` | string | 获取 EncodingAesKey |
| `getEncryptionMode()` | int | 获取加密模式（见常量） |
| `typeLabels()` | array | 获取所有类型的标签映射 |
| `getTypeLabel(ApplicationInterface $app)` | string | 获取指定应用类型的标签 |
| `encryptionModeLabels()` | array | 获取所有加密模式的标签映射 |
| `getEncryptionModeLabel(ApplicationInterface $app)` | string | 获取指定应用加密模式的标签 |

## 典型实现示例

```php
class MyWechatApp implements ApplicationInterface
{
    use ApplicationTypeLabelTrait, ApplicationEncryptionModeLabelTrait;
    // ... 实现接口方法 ...
}
```

## 适用场景

- 统一管理多种微信应用（公众号、服务号、小程序）
- 便于前端下拉选项渲染和标签显示
- 支持多种消息加密模式

---

如需进一步了解，请参考源码或联系作者。 