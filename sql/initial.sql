create database dnd;

use dnd;

CREATE TABLE entries (
    id INT(11) AUTO_INCREMENT,
    name VARCHAR(255),
    appearance TEXT,
    notes TEXT,
    PRIMARY KEY (id)
);

CREATE TABLE characters (
    id INT(11),
    entry_id INT(11),
    max_hit_points INT(11),
    constitution INT(11),
    strength INT(11),
    dexterity INT(11),
    intelligence INT(11),
    wisdom INT(11),
    charisma INT(11),
    race VARCHAR(32),
    gender ENUM('male', 'female', 'other'),
    alignment ENUM('lawful-good', 'lawful-neutral', 'lawful-evil', 'neutral-good', 'neutral-neutral', 'neutral-evil', 'chaotic-good', 'chaotic-neutral', 'chaotic-evil'),
    UNIQUE KEY (entry_id),
    FOREIGN KEY (entry_id)
        REFERENCES entries (id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    PRIMARY KEY (id)
);

CREATE TABLE player_characters (
    id INT(11),
    character_id INT(11),
    player_name VARCHAR(64),
    UNIQUE KEY (character_id),
    FOREIGN KEY (character_id)
        REFERENCES characters (id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    PRIMARY KEY (id)
);

CREATE TABLE items (
    id INT(11),
    entry_id INT(11),
    low_value VARCHAR(32),
    fair_value VARCHAR(32),
    high_value VARCHAR(32),
    effects TEXT,
    UNIQUE KEY (entry_id),
    FOREIGN KEY (entry_id)
        REFERENCES entries (id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    PRIMARY KEY (id)
);

CREATE TABLE locations (
    id INT(11),
    entry_id INT(11),
    UNIQUE KEY (entry_id),
    FOREIGN KEY (entry_id)
        REFERENCES entries (id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    PRIMARY KEY (id)
);

CREATE TABLE monsters (
    id INT(11),
    entry_id INT(11),
    max_hit_points INT(11),
    constitution INT(11),
    strength INT(11),
    dexterity INT(11),
    intelligence INT(11),
    wisdom INT(11),
    charisma INT(11),
    type VARCHAR(32),
    alignment ENUM('lawful-good', 'lawful-neutral', 'lawful-evil', 'neutral-good', 'neutral-neutral', 'neutral-evil', 'chaotic-good', 'chaotic-neutral', 'chaotic-evil'),
    features TEXT,
    attacks TEXT,
    UNIQUE KEY (entry_id),
    FOREIGN KEY (entry_id)
        REFERENCES entries (id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    PRIMARY KEY (id)
);
