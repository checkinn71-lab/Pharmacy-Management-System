# CE 3202 Concrete Mix Design (DoE method), Group G13–G16: filled values for pages 1–8

**Given data:** f_c = 35 MPa · slump 30–60 mm · SD = 3.1 MPa · 20 mm crushed coarse aggregate + uncrushed river sand · OPC · 45 MPa at w/c 0.5 ·
35 % passing the 600 µm sieve · RD (SSD) = 2.65 · absorption: CA 0.43 %, FA 4.15 % · moisture: CA 0.39 %, FA 1.82 %
· flexural loads P = 17.92, 18.89, 19.45 kN

---

## Page 1: Selection of mix proportions

| | |
|---|---|
| Target strength (F_t) | = F_c + 1.64 SD |
| SD | = 3.1 MPa |
| F_c | = 35 MPa |
| F_t | = 35 + 1.64 × 3.1 = 35 + 5.08 |
| F_t | = **40.08 MPa ≈ 40.1 MPa** |

From the graph of compressive strength vs free water/cement ratio (start at 45 MPa at w/c 0.5, follow the parallel curve down to 40.1 MPa):

- Water/cement ratio for 40.1 MPa = **0.55**

Free water content from the table of approximate free water contents needed for a **30–60 mm** slump (20 mm max. aggregate):

- Free water content for the uncrushed fine aggregate, W_f = **180 kg/m³**
- Free water content for the crushed coarse aggregate, W_c = **210 kg/m³**
- Free water content = ⅔ W_f + ⅓ W_c = ⅔(180) + ⅓(210) = 120 + 70 = **190 kg/m³**

## Page 2

- Cement content = Free water content / water-cement ratio
  = 190 / 0.55
  = **345.45 kg/m³ ≈ 345 kg/m³**
- Relative density of the aggregates (SSD) = **2.65**
- From the graph of free water content vs wet density of the concrete mix (190 kg/m³, RD 2.65):
  Wet density of concrete D = **2380 kg/m³**
- Total aggregate content = D − C − W
  - Cement content (C) = 345.45 kg/m³
  - Free water content (W) = 190 kg/m³
- Total aggregate content = 2380 − 345.45 − 190
  = **1844.55 kg/m³**
- Fineness of the river sand, determined by the percentage passing the **600 µm** sieve, is found to be **35 %** of the total sand content.

## Page 3

- Fineness fraction (proportion of fines, from the graph for 20 mm, slump 30–60 mm, w/c 0.55, 35 % passing) = **40 % (0.40)**
- Fine aggregate content = Total aggregate content × proportion of fines
  = 1844.55 × 0.40
  = **737.82 kg/m³**
- Coarse aggregate content = Total aggregate content − Fine aggregate content
  = 1844.55 − 737.82
  = **1106.73 kg/m³**

**Table 2: Material requirement for 1 m³ (SSD basis)**

| Material | Amount (kg/m³) |
|---|---|
| Cement | 345.45 |
| Water | 190.00 |
| Coarse aggregate | 1106.73 |
| Fine aggregate | 737.82 |

## Page 4: Moisture adjustment (the aggregates are not in SSD condition)

Mass at natural moisture = SSD mass × (1 + MC) / (1 + absorption)

- Additional water from fine aggregates = Natural-state FA − FA content (SSD)
  = 737.82 × (1.0182 / 1.0415) − 737.82
  = 721.31 − 737.82 = **−16.51 kg** (the sand is drier than SSD, so it absorbs 16.51 kg of water)
- Additional water from coarse aggregates = Natural-state CA − CA content (SSD)
  = 1106.73 × (1.0039 / 1.0043) − 1106.73
  = 1106.29 − 1106.73 = **−0.44 kg** (the CA absorbs 0.44 kg of water)
- ∴ Water needed from outside = 190 + 16.51 + 0.44
  = **206.95 kg/m³**
- Fine aggregate content (as weighed, natural moisture) = 737.82 × 1.0182 / 1.0415
  = **721.31 kg/m³**
- Coarse aggregate content (as weighed) = **1106.29 kg/m³**

(Check: 345.45 + 206.95 + 721.31 + 1106.29 = 2380 kg/m³ ✓)

## Page 5: Material requirements for 3 cubes, 3 prisms and the slump test

- Total volume of cubes (150 mm) = 3 × 0.15 × 0.15 × 0.15
  = **0.010125 m³**
- Total volume of prisms (100 × 100 × 500 mm) = 3 × 0.1 × 0.1 × 0.5
  = **0.015 m³**
- Volume of slump cone (h = 300, D = 200, d = 100 mm) = πh/12 (D² + Dd + d²)
  = π(0.3)/12 × (0.04 + 0.02 + 0.01) = **0.0055 m³** (the same concrete is reused for the compaction factor test)
  - Total volume = 0.010125 + 0.015 + 0.0055 = **0.03062 m³**
- Volume of concrete mix with 15 % wastage = 0.03062 × 1.15
  = **0.0352 m³ (≈ 0.035 m³)**

**Table 03: Material requirements for 0.0352 m³ of concrete**

| Material | Amount (kg) |
|---|---|
| Water | 206.95 × 0.0352 = **7.29** |
| Coarse aggregate | 1106.29 × 0.0352 = **38.96** |
| Fine aggregate | 721.31 × 0.0352 = **25.40** |
| Cement | 345.45 × 0.0352 = **12.17** |

## Page 6: Compressive strength (150 mm cubes, A = 150 × 150 = 22 500 mm²)

Compressive strength = Failure load P / A

- Cube 1: compressive strength = P₁ (N) / 22 500 = ____ N/mm²
- Cube 2: compressive strength = P₂ (N) / 22 500 = ____ N/mm²
- Cube 3: compressive strength = P₃ (N) / 22 500 = ____ N/mm²

> Use your group's measured failure loads. (Example: 14 MPa corresponds to P = 14 × 22 500 = 315 kN.)

## Page 7: Flexural strength (third-point loading, 100 × 100 mm section, span L = 300 mm)

- Average value of P = (17.92 + 18.89 + 19.45) / 3 = **18.75 kN**
- Value of P in newtons = 18.75 × 10³
  = **18 753 N**
- From the bending moment diagram:
  Maximum bending moment = PL / 6
  = 18 753 × 300 / 6
  = **937 667 N·mm (0.938 kN·m)**
- Second moment of area of the cross-section = bd³ / 12
  = 100 × 100³ / 12
  = **8.333 × 10⁶ mm⁴**
- Flexural strength = (M / I) y = 937 667 × 50 / (8.333 × 10⁶)
  = **5.63 N/mm²**

## Page 8: Results

| | |
|---|---|
| Slump | = ____ mm (measured) |
| Weight of the cylinder with partially compacted concrete | = ____ kg (measured) |
| Weight of the cylinder with fully compacted concrete | = ____ kg (measured) |
| Compaction factor | = partially compacted weight / fully compacted weight = ____ |
| Compressive strength | = ____ MPa (average of the 3 cubes, ≈ 14 MPa) |
| Flexural strength | = **5.63 N/mm²** |

---
**Assumptions to check against your lecture notes:** the values read from the DoE graphs (w/c 0.55, D = 2380 kg/m³, fines 40 %); 150 mm cubes; 100×100×500 mm prisms on a 300 mm span. These sizes give the ≈0.035 m³ batch volume stated in the lab sheet.
