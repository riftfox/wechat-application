# ApplicationTypeLabelTrait 文档

## 简介

`ApplicationTypeLabelTrait` 提供了应用类型标签相关的方法，便于获取类型下拉选项和当前类型的标签显示，常用于前端表单渲染和类型展示。

## 方法说明

| 方法 | 返回值 | 说明 |
| ---- | ------ | ---- |
| `typeLabels()` | array | 获取所有类型的标签映射（如 1=>公众号，2=>服务号，3=>小程序）|
| `getTypeLabel(ApplicationInterface $application)` | string | 获取指定应用类型的标签 |

## 典型用法

```php
class MyWechatApp implements ApplicationInterface
{
    use ApplicationTypeLabelTrait;
    // ... 实现接口方法 ...
}

$app = new MyWechatApp();
$typeOptions = $app->typeLabels(); // [1=>公众号, 2=>服务号, 3=>小程序]
$typeLabel = $app->getTypeLabel($app); // 当前类型标签
```

---

如需进一步了解，请参考源码或联系作者。 