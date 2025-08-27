import Header from '@/components/Header';
import Footer from '@/components/Footer';
import { Button } from '@/components/ui/button';
import { Card } from '@/components/ui/card';
import { Input } from '@/components/ui/input';
import { Textarea } from '@/components/ui/textarea';
import { Label } from '@/components/ui/label';
import { Mail, Phone, MapPin, Clock } from 'lucide-react';

const Contact = () => {
  const contactInfo = [
    {
      icon: Mail,
      title: 'Email Us',
      details: 'info@waterwaysmiami.com',
      description: 'Send us a message anytime'
    },
    {
      icon: Phone,
      title: 'Call Us',
      details: '+1 (305) 555-0123',
      description: 'Mon-Fri 9AM-5PM EST'
    },
    {
      icon: MapPin,
      title: 'Visit Us',
      details: 'Miami-Dade County, Florida',
      description: 'Schedule an appointment'
    },
    {
      icon: Clock,
      title: 'Office Hours',
      details: 'Monday - Friday',
      description: '9:00 AM - 5:00 PM EST'
    }
  ];

  return (
    <div className="min-h-screen bg-background">
      <Header />
      <main className="pt-20">
        {/* Hero Section */}
        <section className="py-20 bg-gradient-hero">
          <div className="container mx-auto px-4 text-center">
            <h1 className="text-5xl md:text-6xl font-bold mb-6 text-foreground">
              Contact Us
            </h1>
            <p className="text-xl text-muted-foreground max-w-3xl mx-auto">
              Ready to bring Waterways to your classroom or institution? 
              We'd love to hear from you and discuss how we can support your educational goals.
            </p>
          </div>
        </section>

        {/* Contact Grid */}
        <section className="py-20">
          <div className="container mx-auto px-4">
            <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
              
              {/* Contact Form */}
              <Card className="p-8 bg-card border-border">
                <h2 className="text-2xl font-bold mb-6 text-foreground">Send Us a Message</h2>
                <form className="space-y-6">
                  <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div className="space-y-2">
                      <Label htmlFor="firstName" className="text-foreground">First Name</Label>
                      <Input 
                        id="firstName" 
                        placeholder="Enter your first name"
                        className="bg-background border-border focus:border-accent"
                      />
                    </div>
                    <div className="space-y-2">
                      <Label htmlFor="lastName" className="text-foreground">Last Name</Label>
                      <Input 
                        id="lastName" 
                        placeholder="Enter your last name"
                        className="bg-background border-border focus:border-accent"
                      />
                    </div>
                  </div>
                  
                  <div className="space-y-2">
                    <Label htmlFor="email" className="text-foreground">Email Address</Label>
                    <Input 
                      id="email" 
                      type="email" 
                      placeholder="your.email@example.com"
                      className="bg-background border-border focus:border-accent"
                    />
                  </div>
                  
                  <div className="space-y-2">
                    <Label htmlFor="organization" className="text-foreground">School/Organization</Label>
                    <Input 
                      id="organization" 
                      placeholder="Enter your school or organization"
                      className="bg-background border-border focus:border-accent"
                    />
                  </div>
                  
                  <div className="space-y-2">
                    <Label htmlFor="subject" className="text-foreground">Subject</Label>
                    <Input 
                      id="subject" 
                      placeholder="What can we help you with?"
                      className="bg-background border-border focus:border-accent"
                    />
                  </div>
                  
                  <div className="space-y-2">
                    <Label htmlFor="message" className="text-foreground">Message</Label>
                    <Textarea 
                      id="message" 
                      placeholder="Tell us more about your needs and how Waterways can help..."
                      rows={6}
                      className="bg-background border-border focus:border-accent resize-none"
                    />
                  </div>
                  
                  <Button 
                    type="submit"
                    className="w-full bg-gradient-ocean hover:shadow-[var(--shadow-glow)] text-lg py-3"
                  >
                    Send Message
                  </Button>
                </form>
              </Card>

              {/* Contact Information */}
              <div className="space-y-8">
                <div>
                  <h2 className="text-2xl font-bold mb-6 text-foreground">Get In Touch</h2>
                  <p className="text-muted-foreground leading-relaxed mb-8">
                    We're here to help educators, administrators, and anyone interested in 
                    bringing innovative STEM education to their community. Whether you have 
                    questions about our curriculum, want to schedule a demo, or are interested 
                    in partnership opportunities, we'd love to connect.
                  </p>
                </div>

                <div className="grid grid-cols-1 sm:grid-cols-2 gap-6">
                  {contactInfo.map((info, index) => (
                    <Card key={info.title} className="p-6 bg-card border-border hover:border-accent transition-all duration-300 hover:shadow-[var(--shadow-card)]">
                      <div className="flex items-start space-x-4">
                        <div className="w-12 h-12 bg-gradient-ocean rounded-lg flex items-center justify-center flex-shrink-0">
                          <info.icon className="text-primary-foreground" size={24} />
                        </div>
                        <div>
                          <h3 className="font-semibold text-foreground mb-1">{info.title}</h3>
                          <p className="text-accent font-medium mb-1">{info.details}</p>
                          <p className="text-muted-foreground text-sm">{info.description}</p>
                        </div>
                      </div>
                    </Card>
                  ))}
                </div>

                {/* Additional Info */}
                <Card className="p-6 bg-gradient-mangrove text-primary-foreground">
                  <h3 className="text-xl font-semibold mb-3">Educational Partnerships</h3>
                  <p className="mb-4 leading-relaxed opacity-90">
                    Interested in bringing Waterways to your school district or educational network? 
                    We offer comprehensive partnership packages including curriculum access, teacher training, 
                    and ongoing support through our Colēgia platform.
                  </p>
                  <Button 
                    variant="secondary"
                    className="bg-primary-foreground/20 text-primary-foreground border-primary-foreground/30 hover:bg-primary-foreground/30"
                  >
                    Learn About Partnerships
                  </Button>
                </Card>
              </div>
            </div>
          </div>
        </section>

        {/* FAQ Section */}
        <section className="py-20 bg-card">
          <div className="container mx-auto px-4">
            <div className="max-w-4xl mx-auto">
              <h2 className="text-3xl font-bold text-center mb-12 text-foreground">
                Frequently Asked Questions
              </h2>
              
              <div className="space-y-6">
                <Card className="p-6 bg-card border-border">
                  <h3 className="text-lg font-semibold mb-3 text-foreground">
                    How can I access the Waterways curriculum?
                  </h3>
                  <p className="text-muted-foreground">
                    The Waterways curriculum is available through Academica's Colēgia platform. 
                    Contact us to set up access for your school or organization.
                  </p>
                </Card>
                
                <Card className="p-6 bg-card border-border">
                  <h3 className="text-lg font-semibold mb-3 text-foreground">
                    What grade levels does Waterways serve?
                  </h3>
                  <p className="text-muted-foreground">
                    Our content is designed for K-12 students, with specific modules tailored 
                    for different age groups and learning levels within that range.
                  </p>
                </Card>
                
                <Card className="p-6 bg-card border-border">
                  <h3 className="text-lg font-semibold mb-3 text-foreground">
                    Is teacher training available?
                  </h3>
                  <p className="text-muted-foreground">
                    Yes! We provide comprehensive professional development and training programs 
                    to help educators effectively implement Waterways content in their classrooms.
                  </p>
                </Card>
                
                <Card className="p-6 bg-card border-border">
                  <h3 className="text-lg font-semibold mb-3 text-foreground">
                    Can individual families access Waterways content?
                  </h3>
                  <p className="text-muted-foreground">
                    While our primary focus is on educational institutions, we're exploring options 
                    for home learning. Contact us to learn about current availability.
                  </p>
                </Card>
              </div>
            </div>
          </div>
        </section>
      </main>
      <Footer />
    </div>
  );
};

export default Contact;