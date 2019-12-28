![Tinysaur](graphics/other/ldplsaur.png)
# www.ldpl-lang.org website

This is repo holds the source for the official [LDPL](https://github.com/lartu/ldpl) website. It is cloned regularly into
the LDPL web server and launched live directly from here, so any changes done to this repository will, eventually, be
reflected on the website.

## Where to put files

This website follows a rather unorthodox file ordering scheme, organized in the following
directory tree:

```
/
- /graphics
  - /boxarts
  - /merch
  - /other
  - /release
  - /wallpapers
- /images
- /logos
- /lpm
```

 * `.html` files should be dropped in the root of this repository.
 * The `images` and `logos` folders shouldn't be used. They are there for link compatibility only.
 * All graphics should go into the `graphics` directory.
   * Boxart graphics should go into the `boxarts` sub-directory.
   * Merchandise photos should go into the `merch` sub-directory.
   * LDPL release logos should go into the `release` sub-directory.
   * LDPL wallpapers go into the `wallpapers` sub-directory.
   * Any other picture can either be put into the `graphics` folder itself or in the `other` directory.
 * LPM packages go into the `lpm` directory, at least for now.
