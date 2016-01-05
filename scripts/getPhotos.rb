require 'net/http'
require 'open-uri'

# Charge le tableau de dokeos sans les <table>
f = File.new('annuaire.html', 'r')

# Initialisation en String
lien = ""
prenom = ""
nom = ""

cpt = 0
# Parcours du html
f.each { |ligne|
  cpt += 1

  # nb ligne du tableau par etudiant = 8 lignes
  numLigne = cpt % 8;

  if(numLigne == 2) # ligne image
    lien = ligne.split("src=")[1].split(" alt")[0].split("\"")[1].split("\"")[0].to_s
  elsif(numLigne == 3) # ligne prenom
    prenom = ligne.split("<td>")[1].split("</td>")[0]
  elsif(numLigne == 4) # ligne nom
    nom = ligne.split("<td>")[1].split("</td>")[0]
  end

  if(numLigne == 7) # A la fin de l'etudiant, on a toutes les infos
    if(!lien.include? "misc.jpg")
      puts prenom + " " + nom + " : " + lien

      prenom = prenom.downcase
      nom = nom.downcase

      File.open("img/".to_s + prenom + ".".to_s + nom + ".jpg", "wb") do |saved_file|
        # the following "open" is provided by open-uri
        open(lien.to_s, "rb") do |read_file|
          saved_file.write(read_file.read)
        end
      end

    end
  end
}

f.close


#
#   ligneActuelle = 0
#   ligneAtteinte = false
#   source.each_line { |n|
#     if n['table>'] then
#       ligneAtteinte = !ligneAtteinte
#     end
#
#     if ligneAtteinte then
#       ligneActuelle += 1
#       if(ligneActuelle > 2) then
#         f.puts(n.split('<')[6].to_s.split('"')[1].to_s.split('/')[0])
#       end
#     end
#   }
#
#   puts i.to_i.chr.to_s +  " : ".to_s  + ligneActuelle.to_s + " etudiants".to_s
# end
#
# f.close
#
# # Recupere la photo de chaque etudiant
# for i in 97..122
#   f = File.open(i.to_i.chr + '.txt', "r")
#
#   f.each_line { |ligne|
#     if !ligne.strip.empty? then
#
#       puts "Begin : " + ligne
#
#       lien = 'http://adonis.u-psud.fr/users/sl3/'.to_s + i.to_i.chr.to_s + '/'.to_s + ligne.chomp.to_s + '/'.to_s
#
#       uri = URI(lien)
#       source = Net::HTTP.get(uri)
#
#       # fPhoto = File.new(ligne + "_photo.txt", 'w+')
#
#       ligneActuelle = 0
#       ligneAtteinte = false
#       stop = false
#       source.each_line { |n|
#         if n['table>'] then
#           ligneAtteinte = !ligneAtteinte
#         end
#         if ligneAtteinte then
#           ligneActuelle += 1
#
#           if(ligneActuelle > 2) then
#
#             if !stop then
#
#               nomPhoto = n.split('<')[6].to_s.split('"')[1].to_s.split('/')[0]
#
#               # fPhoto.puts lien.to_s + nomPhoto.to_s
#
#               File.open("img/".to_s + ligne.chomp.to_s + ".jpg", "wb") do |saved_file|
#                 # the following "open" is provided by open-uri
#                 open(lien.to_s + nomPhoto.to_s, "rb") do |read_file|
#                   saved_file.write(read_file.read)
#                 end
#               end
#             end
#             stop = true
#           end
#         end
#       }
#
#       # fPhoto.close
#
#       puts "Done : " + ligne
#     end
#   }
#
#   f.close
# end
