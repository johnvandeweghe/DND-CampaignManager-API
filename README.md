# DND-CampaignManager-API
An api for a Compain Manager for Dungeons and Dragons DMs

## Feature list (plan)
* One secret key gives full access
* Must be able to store/edit/lookup/search for the following types of things:
    * Monsters
    * Items
    * Locations (tree)
        * Shops
    * Factions
    * NPCs
    * PCs (basics)
    * Hooks
    * Temporary notes (for later filing)
* Links between above (playes belong to factions, live in towns, etc)
* Ability to generate quick Items/NPCs/Shops
* A quick search that searches everything

## Endpoints

### Entries

All other endpoints are sub-entry. But this endpoint gets everything as an entry with a set type.

#### Available Methods

Without element: GET

With element: GET, PATCH, DELETE

#### Fields

* id
* name
* appearance
* notes
* related_entries
* type (one of player_character, character, location, faction, etc)

### Characters
Represents an npc, but is also a base for the PC endpoint

#### Available Methods

Without element: GET, POST

With element: GET, PATCH, DELETE

#### Fields (Inherited from entries)
* name
* appearance
* notes
* related_entries

#### Fields
* type (one of player_character or character)
* max_hit_points
* constitution
* strength
* dexterity
* intelligence
* wisdom
* charisma
* race
* gender
* alignment

### PCs

#### Available Methods

Without element: GET, POST

With element: GET, PATCH, DELETE

#### Fields (Inherited from Characters)
* name
* appearance
* notes
* max_hit_point
* constitution
* strength
* dexterity
* intelligence
* wisdom
* charisma
* race
* gender
* alignment

#### Fields
* player_name
* classes (a list of classes with the level of each)

TODO: Proficiencies?

### Items

#### Available Methods

Without element: GET, POST

With element: GET, PATCH, DELETE

#### Fields (Inherited from entries)
* name
* appearance
* notes

#### Fields
* low_value
* fair_value
* high_value
* effects

### Locations

#### Available Methods

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

### Monsters

#### Available Methods

Without element: GET, POST

With element: GET, PATCH, DELETE

#### Fields (Inherited from entries)
* name
* appearance
* notes

#### Fields
* max_hit_points
* constitution
* strength
* dexterity
* intelligence
* wisdom
* charisma
* type
* alignment
* features (ex: pack tactics)
* attacks

### Notes

#### Available Methods

Without element: GET, POST

With element: GET, PATCH, DELETE

#### Fields
* notes
