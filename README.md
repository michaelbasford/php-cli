php-cli
======

A skeleton CLI application template using Symfony's [Console](https://github.com/symfony/Console) component.

Create a new application
--
```
$ composer create-project michaelbasford/php-cli:dev new-project-dir/
$ cd new-project-dir/
```

Running your application
--
```
$ chmod +x bin/application
$ bin/application
php-cli application version 0.0.1

Usage:
 [options] command [arguments]

Options:
 --help (-h)           Display this help message.
 --quiet (-q)          Do not output any message.
 --verbose (-v|vv|vvv) Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug.
 --version (-V)        Display this application version.
 --ansi                Force ANSI output.
 --no-ansi             Disable ANSI output.
 --no-interaction (-n) Do not ask any interactive question.

Available commands:
 help              Displays help for a command
 list              Lists commands
example
 example:command   An example command.
```

Example Command
```
$ bin/application example:command
Hello, World!
```

Remove Example
--
Remove the following lines from `bin/application`

```
$application->add(
    new Example\ExampleCommand($container)
);
```

Then remove the folder
`$ rm -r src/Example`

Included Components
---
* [Console](https://github.com/symfony/Console)
* [Pimple](http://pimple.sensiolabs.org)
* [Monolog](https://github.com/Seldaek/monolog)
* [YAML Parser](https://github.com/symfony/Yaml)
