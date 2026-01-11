# Blocs ACF Rhumba - Documentation

## Vue d'ensemble

Ce projet a restructuré tous les champs ACF de la carte Rhumba en blocs ACF séparés et réutilisables. Chaque catégorie de la carte (Nouveautés, Bières, Cocktails, etc.) est maintenant un bloc indépendant.

## Structure des blocs créés

Tous les blocs se trouvent dans `/acf-blocks/` et suivent la structure TYLT standard:

```
acf-blocks/
├── rhumba-nouveautes/
├── rhumba-vin-chaud/
├── rhumba-bieres-pression/
├── rhumba-cocktails-bieres/
├── rhumba-bieres-locales/
├── rhumba-bieres-locales-deux/
├── rhumba-bouteilles/
├── rhumba-cocktails/
├── rhumba-shooter/
├── rhumba-vins/
├── rhumba-alcools/
├── rhumba-soft/
└── rhumba-boissons-chaudes/
```

## Structure de chaque bloc

Chaque bloc contient:

```
rhumba-[nom-bloc]/
├── block.json          # Configuration du bloc Gutenberg
├── view.php            # Template d'affichage du bloc
├── package.json        # Configuration npm du bloc
└── assets/
    ├── js/
    │   └── view.js     # JavaScript du bloc
    ├── scss/
    │   └── style.scss  # Styles SCSS
    └── css/
        └── style.css   # Styles compilés (généré automatiquement)
```

## Fichiers ACF JSON

Tous les fichiers de configuration ACF se trouvent dans `/acf-json/`:

- `group_6273b60694280_new.json` - Nouveautés
- `group_657595b594f8b.json` - Vin Chaud
- `group_field_627e2a0f10e6b.json` - Bières Pression
- `group_field_62812b4d93442.json` - Cocktails Bières
- `group_field_62837555369ad.json` - Bières Bouteilles Locales
- `group_field_652e84abb531e.json` - Bières Bouteilles Locales Deux
- `group_field_62851620e3a90.json` - Bouteilles
- `group_field_62878c182bc9f.json` - Cocktails
- `group_field_628cc6831bac0.json` - Shooter
- `group_field_628e521f58aa0.json` - Vins
- `group_field_628cec21a3f6e.json` - Alcools
- `group_field_628cf28486efd.json` - Soft
- `group_field_628cf2d786f02.json` - Boissons Chaudes

## Liste détaillée des blocs

### 1. Rhumba - Nouveautés (`rhumba-nouveautes`)
Affiche les nouveautés avec image de fond, nom, type, degré d'alcool, prix et badge BIO.

**Champs ACF:**
- Gros Titre
- Nom nouveauté
- Type
- % Alcool
- Prix 25cl / 50cl
- Background (image)
- BIO (oui/non)

### 2. Rhumba - Vin Chaud (`rhumba-vin-chaud`)
Section dédiée au vin chaud avec image de fond.

**Champs ACF:**
- Gros Titre
- Prix
- Background (image)

### 3. Rhumba - Bières Pression (`rhumba-bieres-pression`)
Liste des bières pression disponibles.

**Champs ACF:**
- Titre
- Répéteur: Toutes les bières
  - Nom bière
  - Type bière
  - Degrés alcool
  - Prix demi/pinte/pichet
  - BIO (oui/non)

### 4. Rhumba - Cocktails Bières (`rhumba-cocktails-bieres`)
Cocktails à base de bière.

**Champs ACF:**
- Titre
- Répéteur: Cocktails
  - Nom cocktail
  - Recette
  - Prix demi/pinte/pichet

### 5. Rhumba - Bières Locales (`rhumba-bieres-locales`)
Bières locales en bouteille avec photos.

**Champs ACF:**
- Titre
- Répéteur: Bières locales
  - Nom bière
  - Type
  - Degrés d'alcool
  - Nombre de CL
  - Description
  - Image
  - Prix

### 6. Rhumba - Bières Locales Deux (`rhumba-bieres-locales-deux`)
Seconde section pour bières locales (même structure).

### 7. Rhumba - Bouteilles (`rhumba-bouteilles`)
Bières en bouteille.

**Champs ACF:**
- Titre
- Répéteur: Bouteilles
  - Nom bouteille
  - Degree
  - CL
  - Prix
  - Type
  - BIO (oui/non)

### 8. Rhumba - Cocktails (`rhumba-cocktails`)
Carte des cocktails organisée par type d'alcool.

**Champs ACF:**
- Gros titre
- Répéteur: Type Alcool
  - Nom alcool
  - Répéteur: Cocktails
    - Titre cocktail
    - Recette
    - Prix

### 9. Rhumba - Shooter (`rhumba-shooter`)
Liste des shooters.

**Champs ACF:**
- Titre
- Répéteur: Shooters
  - Nom
  - Recette
  - Prix
  - Supp (sirops)

### 10. Rhumba - Vins (`rhumba-vins`)
Carte des vins par type.

**Champs ACF:**
- Titre
- Répéteur: Type Vins
  - Nom vin
  - Répéteur: Vins
    - Titre
    - Prix 15cl
    - Prix bouteille
    - BIO (oui/non)

### 11. Rhumba - Alcools (`rhumba-alcools`)
Carte des alcools par catégorie.

**Champs ACF:**
- Titre
- Répéteur: Type Alcool
  - Nom alcool
  - Répéteur: Alcools
    - Titre
    - Prix

### 12. Rhumba - Soft (`rhumba-soft`)
Boissons sans alcool.

**Champs ACF:**
- Titre
- Répéteur: Softs
  - Nom
  - Prix
  - Supp (sirops/jus)

### 13. Rhumba - Boissons Chaudes (`rhumba-boissons-chaudes`)
Café, thé, etc.

**Champs ACF:**
- Titre
- Répéteur: Boissons
  - Nom
  - Prix
  - Supp (thé/sirop)

## Styles et Design

### Système de styles

Tous les blocs Rhumba utilisent un système de styles cohérent basé sur:

- **Variables centralisées**: `/src/scss/rhumba/_variables.scss`
  - Couleurs: `$b-rhumba` (bleu), `$y-rhumba` (jaune), `$g-bio` (vert bio)
  - Animations: `zoom-in-zoom-out`, `embus`, `bio`
  - Font: "Outfit" (Google Fonts)

- **Images de fond**: `/images/`
  - `bg-pression.png` - Bières pression et cocktails bières
  - `bg-local.png` - Bières locales
  - `bouteilles.png` - Bouteilles
  - `cocktails.png` - Cocktails
  - `shooters.png` - Shooters
  - `vins.png` - Vins
  - `alcool.png` - Alcools
  - `soft.png` - Softs
  - `cafe.png` - Boissons chaudes

- **Styles responsive**: Chaque bloc inclut des media queries pour mobile (<370px)

### Compilation des assets

Les styles SCSS sont automatiquement compilés en CSS avec Gulp:

```bash
# Mode développement avec watch
npm run dev

# Build production
npm run prod

# Build sans watch
npm run preprod
```

La compilation génère:
- Les CSS minifiés dans chaque bloc (`assets/css/style.css`)
- Les sourcemaps pour le débogage (en mode dev)
- L'autoprefixage des propriétés CSS

## Utilisation dans l'éditeur

1. Ouvrir l'éditeur Gutenberg
2. Cliquer sur "+" pour ajouter un bloc
3. Chercher "Rhumba" dans la catégorie "TYLT"
4. Sélectionner le bloc souhaité
5. Remplir les champs ACF dans la sidebar

## Notes techniques

- Tous les blocs utilisent le même système de mu-plugins (`tylt-acf-block.php`)
- Les blocs sont automatiquement enregistrés via `register_block_type_from_metadata()`
- Les champs ACF sont chargés depuis `/acf-json/`
- Les styles sont scopés avec BEM: `.rhumba-[bloc]__[element]`
- JavaScript minimal pour chaque bloc (prêt à être étendu)

## Migration depuis l'ancien système

L'ancien fichier `acf-export-2026-01-11.json` du thème `tanguyp-child` contenait un seul groupe ACF "Rhumba-Carte" avec tous les champs.

Maintenant:
- ✓ Chaque catégorie est un bloc séparé
- ✓ Les blocs sont réutilisables
- ✓ Les styles sont modulaires
- ✓ Chaque bloc peut être utilisé individuellement
- ✓ Meilleure maintenabilité

## Personnalisation

Pour personnaliser un bloc:

1. **Styles**: Modifier `/acf-blocks/rhumba-[nom]/assets/scss/style.scss`
2. **Template**: Modifier `/acf-blocks/rhumba-[nom]/view.php`
3. **JavaScript**: Modifier `/acf-blocks/rhumba-[nom]/assets/js/view.js`
4. **Champs ACF**: Modifier dans l'interface ACF ou dans `/acf-json/`

Après modification des SCSS, compiler avec `npm run preprod`.

---

**Date de création:** 11 janvier 2026
**Créé par:** TYLT avec Claude Code
