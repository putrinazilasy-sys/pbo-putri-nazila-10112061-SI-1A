# ==========================================
# PROGRAM PENGHITUNG ANGSURAN & DENDA
# TOKO PEGADAIAN SYARIAH
# ==========================================

print("TOKO PEGADAIAN SYARIAH")
print("Jl Keadilan No 16")
print("Telp. 72353459")
print("-" * 30)
print("Program Penghitung Besaran Angsuran Hutang")
print("-" * 30)

# 1. Input Data dari User
besaran_pinjaman = int(input("Besaran Pinjaman : Rp."))
bunga_persen = float(input("Masukan besar bunga (%) : "))

# 2. Hitung Total Pinjaman (Pinjaman + Bunga)
# Rumus: Pinjaman + (Pinjaman * Bunga/100)
total_pinjaman = besaran_pinjaman + (besaran_pinjaman * (bunga_persen / 100))
print(f"Total Pinjaman : Rp. {total_pinjaman:,.0f}")

# 3. Input Lama Angsuran
lama_angsuran = int(input("Lama angsuran (bulan) : "))

# 4. Hitung Besaran Angsuran Pokok
# Rumus: Total Pinjaman / Lama Angsuran
besaran_angsuran = total_pinjaman / lama_angsuran
print(f"Besaran angsuran : Rp. {besaran_angsuran:,.0f}")

print("-" * 30)

# 5. Input Keterlambatan
keterlambatan_hari = int(input("Keterlambatan Angsuran (Hari): "))

# 6. Hitung Denda (0.15% per hari dari angsuran)
# Rumus: Hari * 0.0015 * Angsuran
denda_keterlambatan = keterlambatan_hari * 0.0015 * besaran_angsuran

# 7. Hitung Besaran Pembayaran Akhir
# Rumus: Angsuran + Denda
besaran_pembayaran = besaran_angsuran + denda_keterlambatan

# 8. Output Hasil Akhir
print(f"Denda Keterlambatan : {denda_keterlambatan:.0f}")
print(f"Besaran Pembayaran  : {besaran_pembayaran:.0f}")
print("-" * 30)