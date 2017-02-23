# Endpoints

## Entries

All other endpoints are sub-entry. But this endpoint gets everything as an entry with a set type.

### Available Methods

Without element: GET

With element: GET, PATCH, DELETE

### Fields

* id
* name
* appearance
* notes
* related_entries
* type (one of player_character, character, location, faction, etc)

## Creatures
A stat-carrying thing

### Available Methods

Without element: GET, POST

With element: GET, PATCH, DELETE

### Fields (Inherited from entries)
* name
* appearance
* notes
* related_entries

### Fields
* type (One of: Aberation, Beast, Celestial, Construct, Dragon, Elemental, Fey, Fiend, Giant, Humanoid, Monstrosity, Ooze, Plant, Or Undead)
* race
* gender
* max_hit_points
* avarage_max_hit_points (ex: 4d8)
* constitution
* strength
* dexterity
* intelligence
* wisdom
* charisma
* proficiency_bonus
* alignment
* base_speed
* burrow_speed
* climb_speed
* flow_speed
* swim_speed
* languages
* senses
* constitution_saving_throw_modifier (0, 1, 2)
* strength_saving_throw_modifier
* dexterity_saving_throw_modifier
* intelligence_saving_throw_modifier
* wisdom_saving_throw_modifier
* charisma_saving_throw_modifier
* acrobatics_proficiency_modifier
* arcana_proficiency_modifier
* athletics_proficiency_modifier
* deception_proficiency_modifier
* history_proficiency_modifier
* insight_proficiency_modifier
* intimidation_proficiency_modifier
* investigation_proficiency_modifier
* medicine_proficiency_modifier
* nature_proficiency_modifier
* perception_proficiency_modifier
* performance_proficiency_modifier
* persuasion_proficiency_modifier
* religion_proficiency_modifier
* slight_of_hand_proficiency_modifier
* stealth_proficiency_modifier
* survival_proficiency_modifier
* damage_type_modifiers (0, 0.5, 1, 2)
* condition_immunities
* special_traits (not class features, such as spellcasting, or multiattack)
* class_levels

## Players

### Available Methods

Without element: GET, POST

With element: GET, PATCH, DELETE

### Fields
* player_name
* characters

## Items

### Available Methods

Without element: GET, POST

With element: GET, PATCH, DELETE

### Fields (Inherited from entries)
* name
* appearance
* notes

### Fields
* low_value
* fair_value
* high_value
* effects
TODO: Weapons (with attack/damage), and Armor (with AC) OR Equipment

## Locations

### Available Methods

Without element: GET, POST

With element: GET, PATCH, DELETE

#### Fields (Inherited from entries)
* name
* appearance
* notes

#### Fields
N/A

### Factions

#### Available Methods

Without element: GET, POST

With element: GET, PATCH, DELETE

#### Fields (Inherited from entries)
* name
* appearance
* notes

#### Fields
* purpose

### Notes

#### Available Methods

Without element: GET, POST

With element: GET, PATCH, DELETE

#### Fields
* notes
* status (one of pending, synthesized, or declined)
