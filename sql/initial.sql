create database dnd;
use dnd;

CREATE TABLE entries (
    id INT(11) AUTO_INCREMENT,
    name VARCHAR(255),
    appearance TEXT,
    notes TEXT,
    PRIMARY KEY (id)
);

CREATE TABLE alignments (
    alignment VARCHAR(32),
    PRIMARY KEY (alignment)
);

insert into alignments (alignment) values ('lawful-good'), ('lawful-neutral'), ('lawful-evil'), ('neutral-good'), ('neutral-neutral'), ('neutral-evil'), ('chaotic-good'), ('chaotic-neutral'), ('chaotic-evil');

CREATE TABLE creature_types (
	creature_type VARCHAR(32),
    primary key (creature_type)
);

insert into creature_types (creature_type) values ('Aberation'), ('Beast'), ('Celestial'), ('Construct'), ('Dragon'), ('Elemental'), ('Fey'), ('Fiend'), ('Giant'), ('Humanoid'), ('Monstrosity'), ('Ooze'), ('Plant'), ('Undead');

CREATE TABLE creatures (
    entry_id INT(11),
    `type` varchar(32),
    race VARCHAR(32),
    gender VARCHAR(16),
    max_hit_points INT(11),
    average_max_hit_points varchar(32),
    constitution INT(11),
    strength INT(11),
    dexterity INT(11),
    intelligence INT(11),
    wisdom INT(11),
    charisma INT(11),
    alignment VARCHAR(32),
    proficiency_bonus int(11) default 2,
    size varchar(16) DEFAULT "medium",
	base_speed int(11) DEFAULT 30,
	burrow_speed int(11) DEFAULT 0,
	climb_speed int(11) DEFAULT 15,
	fly_speed int(11) DEFAULT 0,
	swim_speed int(11) DEFAULT 15,
	languages varchar(128) DEFAULT '',
	senses varchar(128) DEFAULT '',
	constitution_saving_throw_modifier int(11) DEFAULT 0,
	strength_saving_throw_modifier int(11) DEFAULT 0,
	dexterity_saving_throw_modifier int(11) DEFAULT 0,
	intelligence_saving_throw_modifier int(11) DEFAULT 0,
	wisdom_saving_throw_modifier int(11) DEFAULT 0,
	charisma_saving_throw_modifier int(11) DEFAULT 0,
	acrobatics_proficiency_modifier int(11) DEFAULT 0,
	arcana_proficiency_modifier int(11) DEFAULT 0,
	athletics_proficiency_modifier int(11) DEFAULT 0,
	deception_proficiency_modifier int(11) DEFAULT 0,
	history_proficiency_modifier int(11) DEFAULT 0,
	insight_proficiency_modifier int(11) DEFAULT 0,
	intimidation_proficiency_modifier int(11) DEFAULT 0,
	investigation_proficiency_modifier int(11) DEFAULT 0,
	medicine_proficiency_modifier int(11) DEFAULT 0,
	nature_proficiency_modifier int(11) DEFAULT 0,
	perception_proficiency_modifier int(11) DEFAULT 0,
	performance_proficiency_modifier int(11) DEFAULT 0,
	persuasion_proficiency_modifier int(11) DEFAULT 0,
	religion_proficiency_modifier int(11) DEFAULT 0,
	slight_of_hand_proficiency_modifier int(11) DEFAULT 0,
	stealth_proficiency_modifier int(11) DEFAULT 0,
	survival_proficiency_modifier int(11) DEFAULT 0,
	special_traits text DEFAULT '',
	class_levels varchar(128) default '',
    FOREIGN KEY (entry_id)
        REFERENCES entries (id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (`type`)
        REFERENCES creature_types (`creature_type`)
        ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (alignment)
        REFERENCES alignments (alignment)
        ON UPDATE CASCADE ON DELETE CASCADE,
    PRIMARY KEY (entry_id)
);
    
CREATE TABLE damage_types (
	damage_type varchar(32),
    primary key (damage_type)
);

CREATE TABLE conditions (
	`condition` varchar(32),
    primary key (`condition`)
);

CREATE TABLE creature_damage_type_modifiers (
	creature_entry_id int(11),
    damage_type varchar(32),
    modifier double DEFAULT 1,
    FOREIGN KEY (creature_entry_id)
        REFERENCES creatures (entry_id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (damage_type)
        REFERENCES damage_types (damage_type)
        ON UPDATE CASCADE ON DELETE CASCADE,
    primary key (creature_entry_id, damage_type)
);

CREATE TABLE creature_condition_immunities (
	creature_entry_id int(11),
    `condition` varchar(32),
    FOREIGN KEY (creature_entry_i
        REFERENCES creatures (entry_id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (`condition`)
        REFERENCES creature_damage_type_modifiers (`condition`)
        ON UPDATE CASCADE ON DELETE CASCADE,
    primary key (creature_entry_id, `condition`)
);


CREATE TABLE players (
    id INT(11) AUTO_INCREMENT,
    player_name VARCHAR(64),
    PRIMARY KEY (id)
);

CREATE TABLE items (
    entry_id INT(11),
    low_value VARCHAR(32),
    fair_value VARCHAR(32),
    high_value VARCHAR(32),
    effects TEXT,
    FOREIGN KEY (entry_id)
        REFERENCES entries (id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    PRIMARY KEY (entry_id)
);

CREATE TABLE locations (
    entry_id INT(11),
    FOREIGN KEY (entry_id)
        REFERENCES entries (id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    PRIMARY KEY (entry_id)
);

CREATE TABLE factions (
    entry_id INT(11),
    purpose TEXT,
    FOREIGN KEY (entry_id)
        REFERENCES entries (id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    PRIMARY KEY (entry_id)
);

CREATE TABLE notes (
    id INT(11) AUTO_INCREMENT,
    notes TEXT,
    status ENUM('pending', 'synthesized', 'declined'),
    PRIMARY KEY (id)
);
