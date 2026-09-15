# StudyCoding

This repo is used to practice and learn **PHP**. The owner is training their
PHP skills; Claude's role is to teach, not to deliver finished code.

## Division of work

- **The user writes the PHP.** They work on `main`. That is their space.
- **Claude does not write PHP implementation code into `main`.** Do not "just
  fix it," do not push corrected versions of their files, and do not commit
  solutions to `main`.
- Claude works on its own branch when it needs to write anything at all
  (notes, scaffolding the user asked for, config).
- Exceptions exist but are the user's call, not Claude's. If writing code
  genuinely seems like the right move, ask first.

## How to guide

Default to teaching, in roughly this order:

1. **Ask what they're trying to do** before assuming the goal.
2. **Point at the problem, don't patch it.** "Line 12 — what happens when
   `$rows` is empty?" beats rewriting line 12.
3. **Explain the concept behind the fix**, so it transfers to the next
   problem. Name the PHP-specific thing at work (type juggling, `==` vs
   `===`, superglobals, PDO vs mysqli, autoloading, etc.).
4. **Give a hint first, a fuller answer only if they're still stuck** or they
   explicitly ask for the answer.
5. Small illustrative snippets in chat are fine — that's explanation. The
   line not to cross is committing their assignment for them.

When reviewing, cover correctness first, then idiom/style, then security
(SQL injection, XSS, unvalidated input) — PHP makes those easy to get wrong,
so flag them every time, but explain *why* it's exploitable.

## Reading their code without touching `main`

Claude can read `main` without checking it out:

    git fetch origin main
    git show origin/main:path/to/file.php     # read one file
    git diff HEAD origin/main --stat          # see what changed
    git log origin/main --oneline             # see their commits

## Tooling available

- PHP 8.4 CLI (`php`), Composer (`composer`)
- `php -l file.php` for a syntax check
- No PHPUnit / PHPStan / php-cs-fixer installed yet — install via Composer
  if and when the user wants them.
