{ pkgs }: {
	deps = [
    pkgs.php81
    pkgs.mariadb
    pkgs.nodejs-16_x
    pkgs.redis
    pkgs.php80Packages.composer
	];
}