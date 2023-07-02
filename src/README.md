# larafront

レイアウトの設計方針や規約など、Myルールを作成中【WIP】

- 方針: こんな考えで設計するという概要をまとめる
- 規約: 順守すべきルールをまとめる
- Tips: 規約とまではいかないレベルの事、推奨事項など...

## 方針メモ（WIP）

CSS設計方針は**OOCSS**や**SMACSS**、**FLOCSS**を参考にしつつ自己流。クラス名の命名に迷ったらBootstrapを参考。

コンテナの中にブロックを配置していくイメージ。
ブロックはコンポーネントを集めて構成する。
コンポーネントは、全てのブロック内（全てのコンポーネント内）で再利用が可能な部品。

コンポーネントは最小要素になることが多いが、必ずしも最小要素出なくても可とする。

例えば、以下のボタンは最小要素のコンポーネントだが、

```html
<button class="btn btn-search">検索</button>
````

次のラベルはコンポーネント同士を組み合わせて一つのコンポーネントとする。

```html
<label for="userNameInput" class="form-label">
    <span class="label-txt">名前</span>
    <span class="required-label">必須</span>
</label>
```

コンポーネントとブロックの違い:

- ブロック
  - あらゆるページで再利用可能
  - 視覚的、役割的に分割した大きめの要素
  - 例えば、検索フォーム、入力フォーム、メニューリスト、タイトルバー、 etc...
  - コンテナの子要素はブロックとする。但し、ブロック同士をflexにする場合やスマホ画面で非表示にする対象のブロックは、`wrapper`クラスで囲み、これだけを例外とする。
- コンポーネント
  - 全てのブロック内（全てのコンポーネント内）で再利用が可能
  - 親要素はブロック、またはコンポーネントのみとする。（コンテナ直下に配置しない）


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

**Container**の中に**Block**を配置する。

```html
<div class="layout-xx">
  <div class="xx-container">
    
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

要素の間隔を`margin`または`padding`で**片側**に取る時は原則下と右側に:

- 上下（y軸）: `xx-bottom`
- 左右（x軸）: `xx-right`

## Naming Conventions

### CSSクラス名 略称

許容する略称（これ以外は略さない）

- `btn` : button
- `msg` : message
- `txt` : text
- `bg`  : background

## Font

### font family（WIP）

- `Helvetica Neue`: クリーンでモダン、可読性が高い
- `Arial`: Helveticaに似たサンセリフフォントで、Windowsのデフォルトフォント
- `MS Pゴシック`: Microsoftが提供する日本語表示に適したゴシック体フォント
- `Sans-serif`: serifのないフォントのカテゴリで、読みやすくモダンな印象
