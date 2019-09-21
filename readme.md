## Installation

- Clone the repo `git clone https://github.com/bm-member/bm-blog.git`
- `cd` into project folder
- Run `composer install`
- Create database
- Copy `.env.example` to `.env` or run command
    - In Linux `cp .env.example .env`
    - In Window `copy .env.example .env` and set database connection
- Run `php artisan key:generate` to generate the app key
- Run `php artisan migrate --seed` to create table and to seed data
- Done. 

### Review

https://docs.google.com/forms/d/1ubg55WfgxM_hRRKYTlKYcH2d16kgiDHibRoOzZCkKz4/prefill
