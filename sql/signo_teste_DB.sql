CREATE DATABASE signo_teste;

CREATE TABLE IF NOT EXISTS pedidos (
	id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    endereco VARCHAR(255),
    bairro VARCHAR(255),
    cep VARCHAR(8),
    cidade VARCHAR(255),
    uf VARCHAR(2),
    email VARCHAR(255),
    telefone VARCHAR(11) NOT NULL,
    tipo_revistinha ENUM("convite", "lembranca", "convite-lembranca") NOT NULL,
    quantidade INT NOT NULL,
    atracoes_do_evento VARCHAR(255) NOT NULL,
    aceita_sugestoes TINYINT ZEROFILL NOT NULL,
    imagens VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
) ENGINE = InnoDB DEFAULT CHARSET = utf8;