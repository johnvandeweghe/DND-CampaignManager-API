DROP DATABASE dnd_cm;

create database dnd_cm;
use dnd_cm;

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
    PRIMARY KEY (creature_type)
);

insert into creature_types (creature_type) values ('Aberation'), ('Beast'), ('Celestial'), ('Construct'), ('Dragon'), ('Elemental'), ('Fey'), ('Fiend'), ('Giant'), ('Humanoid'), ('Monstrosity'), ('Ooze'), ('Plant'), ('Undead');

CREATE TABLE creatures (
    entry_id INT(11),
    `type` VARCHAR(32),
    race VARCHAR(32),
    gender VARCHAR(16),
    max_hit_points INT(11),
    average_max_hit_points VARCHAR(32),
    constitution INT(11),
    strength INT(11),
    dexterity INT(11),
    intelligence INT(11),
    wisdom INT(11),
    charisma INT(11),
    alignment VARCHAR(32),
    proficiency_bonus INT(11) DEFAULT 2,
    size VARCHAR(16) DEFAULT 'medium',
    base_speed INT(11) DEFAULT 30,
    burrow_speed INT(11) DEFAULT 0,
    climb_speed INT(11) DEFAULT 15,
    fly_speed INT(11) DEFAULT 0,
    swim_speed INT(11) DEFAULT 15,
    languages VARCHAR(128) DEFAULT '',
    senses VARCHAR(128) DEFAULT '',
    constitution_saving_throw_modifier INT(11) DEFAULT 0,
    strength_saving_throw_modifier INT(11) DEFAULT 0,
    dexterity_saving_throw_modifier INT(11) DEFAULT 0,
    intelligence_saving_throw_modifier INT(11) DEFAULT 0,
    wisdom_saving_throw_modifier INT(11) DEFAULT 0,
    charisma_saving_throw_modifier INT(11) DEFAULT 0,
    acrobatics_proficiency_modifier INT(11) DEFAULT 0,
    arcana_proficiency_modifier INT(11) DEFAULT 0,
    athletics_proficiency_modifier INT(11) DEFAULT 0,
    deception_proficiency_modifier INT(11) DEFAULT 0,
    history_proficiency_modifier INT(11) DEFAULT 0,
    insight_proficiency_modifier INT(11) DEFAULT 0,
    intimidation_proficiency_modifier INT(11) DEFAULT 0,
    investigation_proficiency_modifier INT(11) DEFAULT 0,
    medicine_proficiency_modifier INT(11) DEFAULT 0,
    nature_proficiency_modifier INT(11) DEFAULT 0,
    perception_proficiency_modifier INT(11) DEFAULT 0,
    performance_proficiency_modifier INT(11) DEFAULT 0,
    persuasion_proficiency_modifier INT(11) DEFAULT 0,
    religion_proficiency_modifier INT(11) DEFAULT 0,
    slight_of_hand_proficiency_modifier INT(11) DEFAULT 0,
    stealth_proficiency_modifier INT(11) DEFAULT 0,
    survival_proficiency_modifier INT(11) DEFAULT 0,
    special_traits TEXT,
    class_levels VARCHAR(128) DEFAULT '',
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
    damage_type VARCHAR(32),
    PRIMARY KEY (damage_type)
);

CREATE TABLE conditions (
    `condition` VARCHAR(32),
    PRIMARY KEY (`condition`)
);

CREATE TABLE creature_damage_type_modifiers (
    creature_entry_id INT(11),
    damage_type VARCHAR(32),
    modifier DOUBLE DEFAULT 1,
    FOREIGN KEY (creature_entry_id)
        REFERENCES creatures (entry_id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (damage_type)
        REFERENCES damage_types (damage_type)
        ON UPDATE CASCADE ON DELETE CASCADE,
    PRIMARY KEY (creature_entry_id , damage_type)
);

CREATE TABLE creature_condition_immunities (
    creature_entry_id INT(11),
    `condition` VARCHAR(32),
    FOREIGN KEY (creature_entry_id)
        REFERENCES creatures (entry_id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (`condition`)
        REFERENCES conditions (`condition`)
        ON UPDATE CASCADE ON DELETE CASCADE,
    PRIMARY KEY (creature_entry_id , `condition`)
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

-- Entry Relations

CREATE TABLE creature_creature_relation_types (
    id INT(11) AUTO_INCREMENT,
    `a_to_b_type` VARCHAR(32),
    `b_to_a_type` VARCHAR(32),
    UNIQUE KEY (`a_to_b_type`),
    UNIQUE KEY (`b_to_a_type`),
    PRIMARY KEY (id)
);

INSERT INTO creature_creature_relation_types (a_to_b_type, b_to_a_type) VALUES ('parent_of', 'child_of');

CREATE TABLE creature_creature_relations (
    creature_a INT(11),
    creature_b INT(11),
    relation_type_id INT(11),
    FOREIGN KEY (creature_a)
        REFERENCES creatures (entry_id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (creature_b)
        REFERENCES creatures (entry_id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (relation_type_id)
        REFERENCES creature_creature_relation_types (id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    PRIMARY KEY (creature_a , creature_b , relation_type_id)
);

CREATE TABLE creature_item_relation_types (
    id INT(11) AUTO_INCREMENT,
    creature_to_item_type VARCHAR(32),
    item_to_creature_type VARCHAR(32),
    UNIQUE KEY (`creature_to_item_type`),
    UNIQUE KEY (`item_to_creature_type`),
    PRIMARY KEY (id)
);

INSERT INTO creature_item_relation_types (creature_to_item_type, item_to_creature_type)
VALUES ('has', 'in_possession_of');

CREATE TABLE creature_item_relations (
    creature_id INT(11),
    item_id INT(11),
    relation_type_id INT(11),
    quantity DOUBLE NULL,
    FOREIGN KEY (creature_id)
        REFERENCES creatures (entry_id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (item_id)
        REFERENCES items (entry_id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (relation_type_id)
        REFERENCES creature_item_relation_types (id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    PRIMARY KEY (creature_id , item_id , relation_type_id)
);

CREATE TABLE creature_faction_relation_types (
    id INT(11) AUTO_INCREMENT,
    creature_to_faction_type VARCHAR(32),
    faction_to_creature_type VARCHAR(32),
    UNIQUE KEY (`creature_to_faction_type`),
    UNIQUE KEY (`faction_to_creature_type`),
    PRIMARY KEY (id)
);
    
INSERT INTO creature_faction_relation_types (creature_to_faction_type, faction_to_creature_type)
VALUES ('member_of', 'member');

CREATE TABLE creature_faction_relations (
    creature_id INT(11),
    faction_id INT(11),
    relation_type_id INT(11),
    title VARCHAR(32) NULL,
    FOREIGN KEY (creature_id)
        REFERENCES creatures (entry_id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (faction_id)
        REFERENCES factions (entry_id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (relation_type_id)
        REFERENCES creature_faction_relation_types (id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    PRIMARY KEY (creature_id , faction_id , relation_type_id)
);

CREATE TABLE location_location_relation_types (
    id INT(11) AUTO_INCREMENT,
    `a_to_b_type` VARCHAR(32),
    `b_to_a_type` VARCHAR(32),
    UNIQUE KEY (`a_to_b_type`),
    UNIQUE KEY (`b_to_a_type`),
    PRIMARY KEY (id)
);
    
INSERT INTO location_location_relation_types (a_to_b_type, b_to_a_type)
VALUES ('parent_of', 'child_of');

CREATE TABLE location_location_relations (
    location_a INT(11),
    location_b INT(11),
    relation_type_id INT(11),
    FOREIGN KEY (location_a)
        REFERENCES locations (entry_id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (location_b)
        REFERENCES locations (entry_id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (relation_type_id)
        REFERENCES location_location_relation_types (id)
        ON UPDATE CASCADE ON DELETE CASCADE,
    PRIMARY KEY (location_a , location_b , relation_type_id)
);
