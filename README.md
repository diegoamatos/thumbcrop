# Thumbcrop @SimpSyst

[![Maintainer](http://img.shields.io/badge/maintainer-@diegomatos-blue.svg?style=flat-square)](https://twitter.com/diegoamatos)
[![Source Code](http://img.shields.io/badge/source-simpsyst/thumbcrop-blue.svg?style=flat-square)](https://github.com/diegoamatos/thumbcrop)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/simpsyst/thumbcrop.svg?style=flat-square)](https://packagist.org/packages/simpsyst/thumbcrop)
[![Latest Version](https://img.shields.io/github/release/diegoamatos/thumbcrop.svg?style=flat-square)](https://github.com/diegomatos/thumbcrop/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build](https://img.shields.io/scrutinizer/build/g/diegomatos/thumbcrop.svg?style=flat-square)](https://scrutinizer-ci.com/g/diegomatos/thumbcrop)
[![Quality Score](https://img.shields.io/scrutinizer/g/diegomatos/thumbcrop.svg?style=flat-square)](https://scrutinizer-ci.com/g/diegomatos/thumbcrop)
[![Total Downloads](https://img.shields.io/packagist/dt/simpsyst/thumbcrop.svg?style=flat-square)](https://packagist.org/packages/simpsyst/thumbcrop)

###### Thumbcrop is a component that simplifies the creation of JPG and PNG image thumbnails with a cache engine. Thumbcrop CC creates your image for each part required in the application with zero complexity.

Thumbcrop é um componente que simplifica a criação de miniaturas de imagens JPG e PNG com um motor de cache. O Thumbcrop CC cria versões de suas imagens para cada dimensão necessária na aplicação com zero de complexidade.

####WEBP THUMBNAILS:

Published in version 1.3.* by default how thumbnails are converted to webP.

Adicionado na versão 1.3.* por padrão as miniaturas são convertidas para webP.

## About SimpSyst

###### SimpSyst is a set of small and optimized PHP components for common tasks. Held by Diego Matos and the Compusert team. With them you perform routine tasks with fewer lines, writing less and doing much more.

SimpSyst é um conjunto de pequenos e otimizados componentes PHP para tarefas comuns. Mantido por Diego Matos. Com eles você executa tarefas rotineiras com poucas linhas, escrevendo menos e fazendo muito mais.

### Highlights

- Simple Thumbnail Creator (Simples criador de miniaturas)
- Cache optimization per dimension (Otimização em cache por dimensão)
- Media Control by Filename (Contrôle de mídias por nome do arquivo)
- Cache cleanup by filename and total (Limpeza de cache por nome de arquivo e total)
- Composer ready and PSR-2 compliant (Pronto para o composer e compatível com PSR-2)

## Installation

Thumbcrop is available via Composer:

```bash
"simpsyst/thumbcrop": "1.3.*"
```

or run

```bash
composer require simpsyst/thumbcrop
```

## Documentation

###### They are just two methods to do all the work. You just need to call ***make*** to create or use thumbnails of any size, or ***flush*** to free the cache of a file or the entire folder. SimpSyst Thumbcrop works like this:

São apenas dois métodos para fazer todo o trabalho. Você só precisa chamar o ***make*** para criar ou usar miniaturas de qualquer tamanho, ou o ***flush*** para liberar o cache de um arquivo ou da pasta toda. SimpSyst Thumbcrop funciona assim:

#### Create thumbnails

```php
<?php
require __DIR__ . "/../src/Thumbcrop.php";

$c = new \SimpSyst\Thumbcrop\Thumbcrop("patch/to/cache");

echo "<img src='{$c->make("images/image.jpg", 500)}' alt='Happy SimpSyst' title='Happy SimpSyst'>";
echo "<img src='{$c->make("images/image.jpg", 500, 300)}' alt='Happy SimpSyst' title='Happy SimpSyst'>";
```

#### Clear cache

```php
<?php
require __DIR__ . "/../src/Thumbcrop.php";

$c = new \SimpSyst\Thumbcrop\Thumbcrop("patch/to/cache");

//flush by filename
$c->flush("images/image.jpg");

//flush cache folder
$c->flush();
```

## Contributing

Please see [CONTRIBUTING](https://github.com/diegoamatos/thumbcrop/blob/master/CONTRIBUTING.md) for details.

## Support

###### Security: If you discover any security related issues, please email oi@diegomatos.com instead of using the issue tracker.

Se você descobrir algum problema relacionado à segurança, envie um e-mail para oi@diegomatos.com em vez de usar o rastreador de problemas.

Thank you

## Credits

- [Diego Matos](https://github.com/diegoamatos) (Developer)
- [Compusert Technologies](https://github.com/compusert) (Team)
- [All Contributors](https://github.com/diegoamatos/thumbcrop/contributors) (This Rock)

## License

The MIT License (MIT). Please see [License File](https://github.com/diegoamatos/thumbcrop/blob/master/LICENSE) for more information.