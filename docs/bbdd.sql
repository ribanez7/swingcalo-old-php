DROP DATABASE IF EXISTS swingcal;

CREATE DATABASE IF NOT EXISTS swingcal;

use swingcal;

GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, DROP, INDEX, ALTER, LOCK TABLES, CREATE TEMPORARY TABLES 
ON swingcal.* TO 'calo'@'localhost' IDENTIFIED BY 'password';

CREATE TABLE IF NOT EXISTS users (
    id mediumint NOT NULL AUTO_INCREMENT,
    login varchar (10) NOT NULL,
    pwd varchar(40) NOT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `posts` (
    id mediumint NOT NULL AUTO_INCREMENT,
    title varchar(250) NOT NULL,
    seo_title varchar(250) NOT NULL, 
    post text NOT NULL,
    img varchar(500) NULL,
    video varchar(500) NULL,
    date_creation TIMESTAMP DEFAULT NOW() NOT NULL,
    id_user mediumint NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_user) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO users (login, pwd) VALUES
('Rubén',MD5('R2013uben')),
('Andrés',MD5('A2013ndres')),
('Dani',MD5('D2013ani')),
('Laura',MD5('L2013aura'));

INSERT INTO posts (title, seo_title, post, id_user) VALUES
('Don Quijote de la Mancha', 'don-quijote-de-la-mancha', '<p>En un lugar de la Mancha, de cuyo nombre no quiero acordarme,
 no ha mucho tiempo que vivía un hidalgo de los de lanza en astillero, adarga antigua, 
rocín flaco y galgo corredor. Una olla de algo más vaca que carnero, salpicón las más noches, 
duelos y quebrantos los sábados, lantejas los viernes, algún palomino de añadidura los domingos, 
consumían las tres partes de su hacienda. El resto della concluían sayo de velarte, 
calzas de velludo para las fiestas, con sus pantuflos de lo mesmo, y los días de entresemana se 
honraba con su vellorí de lo más fino. Tenía en su casa una ama que pasaba de los cuarenta, 
y una sobrina que no llegaba a los veinte, y un mozo de campo y plaza, que así ensillaba el 
rocín como tomaba la podadera. Frisaba la edad de nuestro hidalgo con los cincuenta años; 
era de complexión recia, seco de carnes, enjuto de rostro, gran madrugador y amigo de la caza. 
Quieren decir que tenía el sobrenombre de Quijada, o Quesada, que en esto hay alguna diferencia 
en los autores que deste caso escriben; aunque, por conjeturas verosímiles, se deja entender que 
se llamaba Quejana. Pero esto importa poco a nuestro cuento; basta que en la narración dél no se 
salga un punto de la verdad.</p>
<p>Es, pues, de saber que este sobredicho hidalgo, los ratos que estaba ocioso, que eran los más del año, 
se daba a leer libros de caballerías, con tanta afición y gusto, que olvidó casi de todo punto el 
ejercicio de la caza, y aun la administración de su hacienda. Y llegó a tanto su curiosidad y desatino en esto, 
que vendió muchas hanegas de tierra de sembradura para comprar libros de caballerías en que leer, y así, 
llevó a su casa todos cuantos pudo haber dellos; y de todos, ningunos le parecían tan bien como los que 
compuso el famoso Feliciano de Silva, porque la claridad de su prosa y aquellas entricadas razones suyas 
le parecían de perlas, y más cuando llegaba a leer aquellos requiebros y cartas de desafíos, donde en 
muchas partes hallaba escrito: La razón de la sinrazón que a mi razón se hace, de tal manera mi razón enflaquece, 
que con razón me quejo de la vuestra fermosura. Y también cuando leía: ...los altos cielos que de vuestra 
divinidad divinamente con las estrellas os fortifican, y os hacen merecedora del merecimiento que merece 
la vuestra grandeza.</p>', 1);

INSERT INTO posts (title, seo_title, post, id_user) VALUES
('Lorem Ipsum', 'lorem-ipsum', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
Phasellus cursus et lectus id ornare. Mauris sagittis quam id pharetra tincidunt. 
Suspendisse pulvinar ligula semper nisl ullamcorper, a pharetra leo luctus. 
Quisque mi ante, ullamcorper eget nunc quis, accumsan pulvinar odio. Nulla sem erat, 
vestibulum ut varius ac, interdum at velit. Sed sollicitudin mi ac convallis rhoncus. 
Suspendisse porta turpis nibh, sit amet cursus leo sagittis in. Nullam suscipit molestie 
diam quis fringilla. Donec odio sem, posuere sit amet lacus ut, tempor scelerisque leo.</p>
<p>Nulla quis hendrerit lectus, id pulvinar turpis. Quisque bibendum dolor ut placerat venenatis. 
Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
Nam in massa ornare, euismod magna at, molestie libero. In pellentesque, massa nec auctor feugiat, 
ipsum lectus laoreet felis, in congue nisi purus eget orci. Fusce mattis, mauris at condimentum tempor, 
tortor enim feugiat sapien, tempus luctus dolor augue vitae tellus. Vivamus a augue ultricies, 
iaculis ligula vitae, hendrerit sapien. Praesent in placerat lectus. Integer sit amet urna ac urna 
ornare scelerisque.</p>', 2);