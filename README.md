# theme-jornal-livre
Teste Desenvolvedor Cpmídias

1) Este arquivo é o tema do site staging.jornallivre.nousk.com.br
2) A pasta completa do site (wordpress+nginx+db) encontra-se: https://drive.google.com/file/d/1CyKcvm46xuH2KBbtRIa8IK-021tEvmMQ/view?usp=sharing
3) Especificações do site:
	Servidor da DigitalOcean
	- ubuntu: 18.04
	- php: 7.2
	- mysql 14.14 Distrib 5.7.36
	- nginx/1.14
	- worpdress: 5.8.1
4) A senha para visualizar o site é através do arquivo nginx. Para não pedir a senha, comentar as linhas 8 e 9 do arquivo jornal-nginx:
auth_basic "Administrator Login";
auth_basic_user_file /home/sadmin/sites/jornallivre/.htpasswd;
5) As informações sobre o banco de dados encontra-se no arquivo wp-config na raiz da pasta jornallivre

  
