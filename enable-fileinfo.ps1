$phpIniPath = "C:\Program Files\php-8.4.13-nts-Win32-vs17-x64\php.ini"
$content = Get-Content $phpIniPath
$newContent = $content -replace ';extension=pdo_mysql', 'extension=pdo_mysql'
$newContent = $newContent -replace ';extension=mysqli', 'extension=mysqli'
Set-Content -Path $phpIniPath -Value $newContent
Write-Host "Extensiones MySQL habilitadas correctamente"
