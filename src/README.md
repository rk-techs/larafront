# larafront

## 方針Myメモ（WIP）

CSS設計方針は**OOCSS**や**SMACSS**、**FLOCSS**を参考にしつつ自己流。クラス名の命名に迷ったらBootstrapを参考。

コンテナの中にブロックを配置していくイメージ。

構造と装飾を分離してマルチクラスにする。

- 構造: `display`, `width`, `height`, `text-align`, etc...
- 装飾: `background-color`, `border-color`, `color`, `font-weight`, etc...

## Quick Guide

ページを主要エリアで分割する。迷ったら、コンテナ幅や背景色が変わりうるレイヤーで考える。
`header`, `breadcrumb`, `main` ,`footer`, etc...

分割したエリアを**Layout**とし、子要素に**Container**を配置する。

```html
<div class="layout-xx">
  <div class="xx-container">
    contents...
  </div>
</div>
```

## 構造ルール（WIP）

`layout-xx` > `xx-container` > `xx-wrapper` > `xx-block`

container

- `layout-xx`
  - `xx-container`

block

- `xx-block`
  - `xx-header`
  - `xx-body`
  - `xx-footer`

または、

- `xx-block`
  - `xx-header`
  - `xx-body`
    - `xx-content`
    - `xx-footer`

リンク付きリスト構造:

- `xx-list`
  - `xx-item`
    - `xx-link`

## Naming Conventions

Parent layer > Child layer

- `page-header` > `header-container`
- `page-main`   > `main-container`
- `breadcrums`  > `bc-container`
- `page-footer` > `footer-container`

### CSSクラス名 略称

- `btn` : button
- `msg` : message
- `txt` : text
- `bg`  : background

## Font Family

My favorite fonts（WIP）

- `Helvetica Neue`: クリーンでモダン、可読性が高い
- `Arial`: Helveticaに似たサンセリフフォントで、Windowsのデフォルトフォント
- `MS Pゴシック`: Microsoftが提供する日本語表示に適したゴシック体フォント
- `Sans-serif`: serifのないフォントのカテゴリで、読みやすくモダンな印象

