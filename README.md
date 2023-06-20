# larafront

My front-end Components and Guideline for **Laravel** with **Sass**.

## Prerequisite

環境: 

- `MacBook Air (M1, 2020)`
- `macOS Ventura 13.4`
- Docker: `20.10.12`
- Docker Compose: `2.2.3`

Docker環境構築: [docker-laravel](https://github.com/rk-techs/docker-laravel) を参照。

## Quick Guide

- Make the structure into **two layers** of containers
- Apply styles that span the entire page to the **parent layer**
- Apply styles that fit within the content width to the **child layer**

```html
<div class="parent">
  <div class="child">
    contents...
  </div>
</div>
```

## Naming Conventions

Parent layer > Child layer

- `page-header` > `header-container`
- `page-main`   > `main-container`
- `breadcrums`  > `bc-container`
- `page-footer` > `footer-container`

## Font Family

My favorite fonts（調査中...）

- `Helvetica Neue`: クリーンでモダン、可読性が高い
- `Arial`: Helveticaに似たサンセリフフォントで、Windowsのデフォルトフォント
- `MS Pゴシック`: Microsoftが提供する日本語表示に適したゴシック体フォント
- `Sans-serif`: serifのないフォントのカテゴリで、読みやすくモダンな印象
