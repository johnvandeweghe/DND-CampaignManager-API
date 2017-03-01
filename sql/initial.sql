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

/*
proficiency_bonus
base_speed
burrow_speed
climb_speed
flow_speed
swim_speed
languages
senses
constitution_saving_throw_modifier (0, 1, 2)
strength_saving_throw_modifier
dexterity_saving_throw_modifier
intelligence_saving_throw_modifier
wisdom_saving_throw_modifier
charisma_saving_throw_modifier
acrobatics_proficiency_modifier
arcana_proficiency_modifier
athletics_proficiency_modifier
deception_proficiency_modifier
history_proficiency_modifier
insight_proficiency_modifier
intimidation_proficiency_modifier
investigation_proficiency_modifier
medicine_proficiency_modifier
nature_proficiency_modifier
perception_proficiency_modifier
performance_proficiency_modifier
persuasion_proficiency_modifier
religion_proficiency_modifier
slight_of_hand_proficiency_modifier
stealth_proficiency_modifier
survival_proficiency_modifier
damage_type_modifiers (0, 0.5, 1, 2)
condition_immunities
special_traits (not class features, such as spellcasting, or multiattack)
class_levels
*/
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

--
