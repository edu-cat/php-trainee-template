[![Course Build](https://github.com/edu-cat/php-trainee-template/actions/workflows/course_build.yml/badge.svg?branch=master)](https://github.com/edu-cat/php-trainee-template/actions/workflows/course_build.yml)

# php-trainings
PHP Education program

# Table of Contents
1. [Pre-requirements](#pre-requirements)
2. [Workflow](#workflow)
3. [Special Notes](#special-notes)
4. [See also](#see-also)

## Pre-requirements
1. It's highly recommended to use Ubuntu latest stable edition. 
2. Install `php 8.1` following instructions for your OS.
3. Install and enable  at least `php-xml` extension.
4. Install [Composer tool](https://getcomposer.org/download/). 
   - If you are using GNU/Linux, run as the last Composer installation step: 
   ```shell
   mv composer.phar /usr/local/bin/composer
   chmod a+x /usr/local/bin/composer
   ```
5. Optional steps if you don't yet have public/private keys for your GitHub account:
   - Generate public/private keys for Github. You can use `ssh-keygen` command with parameters on GNU/Linux 
   (press `Enter` for any prompt):
   ```shell
   ssh-keygen -t ecdsa -b 521 -C "course_key" -f ~/.ssh/github_php_course
   ```
   - Create `~/.ssh/config` file with following instructions:
   ```
   # GitHub.com
   Host github.com
   UpdateHostKeys no
   PreferredAuthentications publickey
   IdentityFile ~/.ssh/github_php_course
   ```
   - [Copy](https://docs.github.com/en/authentication/connecting-to-github-with-ssh/adding-a-new-ssh-key-to-your-github-account) 
   ssh public key to your GitHub profile.
6. Identify yourself for GitHub:
```shell
git config --global user.name "Your Name"
git config --global user.email "your_email"
```

## Workflow
1. Clone this repository to your machine.
2. Subscribe to the repository to be able to receive any notification on it.
3. Create separate branch and folders in src/ and tests/ for each task. 
4. When you are ready to show your solution (task and tests), create Pull Request (PR). 
5. If you have errors reported by GitHub Actions, check their details and fix issues.

## Special Notes
1. See Task1 [source](src/Task1/myTernary.php) and [test](tests/Task1/MyTernaryTest.php) 
files as example.
2. Use [PSR-12](https://www.php-fig.org/psr/psr-12/) and [PSR-4](https://www.php-fig.org/psr/psr-4/) 
for code styling, autoload, etc.
3. Use English for comments, class, properties, methods, functions, etc.
4. If you use files without class declaration, add your src file to 
[includes.php](lib/includes.php) file to be able to run tests.
5. Before creating PR run following commands in your machine 

    - `composer style` to check code style 
    - `composer analyse` to perform static analyze
    - `composer tests` to run tests

6. Create PR only after all above commands run with green (success) return status.

## See also
1. [PHP Documentation](https://www.php.net/docs.php)
2. [PHP: The Right Way](https://phptherightway.com/)
3. [CutCode - PHP](https://www.youtube.com/watch?v=XUUxlNY5oOg&list=PLTucyHptHtTlPKuCdveqnaZE_Mi-F1LhE)
4. [CutCode](https://www.youtube.com/c/CutCodeRu/videos)
5. [Laracasts](https://laracasts.com/)
6. [SymfonyCasts](https://symfonycasts.com/)
7. [Laravel Daily](https://laraveldaily.com/)
8. [PHP Point](https://www.youtube.com/c/PHPPoint/videos)
9. [Composer](https://getcomposer.org/)
10. [Git Book](https://git-scm.com/book/en/v2)

